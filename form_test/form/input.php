<?php

// スーパーグローバル変数 php9種類あり
// 連想配列
if(!empty($_GET)) {
  echo "<pre>";
  var_dump($_GET);
  echo "</pre>";
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
  <!-- methodはGETかPOST actionは処理するファイル名 -->
  <!-- 送信するとURLの後に?~~~になる。query(クエリ) -->
  <form method="" action="input.php">
    氏名
    <input type="text" name="your_name">
    <br>

    <input type="checkbox" name="sports[]" value="野球">野球
    <input type="checkbox" name="sports[]" value="サッカー">サッカー
    <input type="checkbox" name="sports[]" value="バスケ">バスケ

    <br>

    <input type="submit" value="送信">

  </form>
</body>
</html>