<?php

//クリックジャッキングの対策。header関数でHTTPヘッダーにページをフレーム内に表示できないような設定を送っています。
header("X-FRAME-OPTIONS: DENY");

// スーパーグローバル変数 php9種類あり
// 連想配列
// if(!empty($_POST)) {
//   echo "<pre>";
//   var_dump($_POST);
//   echo "</pre>";
// }

// XSS対策 サニタイズ
function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
// formは、入力、確認、完了をinput.php,confirm.php,thanks.phpで分けられることがある。

// 今回は一つのファイルで、if文を使用しformを作成する。

// 0なら入力,1なら確認、2なら完了で切り替える。
$pageFlag = 0;

if(!empty($_POST['btn_confirm'])) {
  $pageFlag = 1;
}

if(!empty($_POST['btn_submit'])) {
  $pageFlag = 2;
}

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォーム作成</title>
  </head>
  <body>
    
  <!-- 入力画面--------------------------- -->
  <?php if($pageFlag === 0) : ?>
    
    <!-- methodはGETかPOST actionは処理するファイル名 -->
    <!-- 送信するとURLの後に?~~~になる。query(クエリ) -->
    <form method="POST" action="input.php">
      氏名
      <input type="text" name="your_name" value="<?php if(!empty($_POST['your_name'])){echo h($_POST['your_name']);} ?>">
      <br>
      
      メールアドレス
      <input type="email" name="email" value="<?php if(!empty($_POST['email'])){echo h($_POST['email']);} ?>" >
      
      <br>
      
      <input type="submit" name="btn_confirm" value="確認する">
      
    </form>
    <?php endif; ?>


    <!-- 確認画面--------------------------- -->
    <?php if($pageFlag === 1) : ?>
      <form method="POST" action="input.php">
        氏名
        <?php echo h($_POST["your_name"]);?>
        <br>
        
        メールアドレス
        <?php echo h($_POST["email"]);?>
        
        <br>
        
        <input type="submit" name="back" value="戻る">
        <input type="submit" name="btn_submit" value="送信する">
        <!-- GET,POSTなどの通信を行うとvalue内容が消える -->
        <input type="hidden" name="your_name" value="<?php echo h($_POST['your_name']); ?>">
        <input type="hidden" name="email" value="<?php echo h($_POST['email']); ?>">
      </form>
      <?php endif; ?>

    <!-- 完了画面------------------------- -->
    <?php if($pageFlag === 2) : ?>
      送信が完了しました。
    <?php endif; ?>
  
</body>
</html>