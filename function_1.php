<?php

// 引数なし
// 戻り値なし
function test(){
  echo "テスト";
}

test();

// 引数あり
// 戻り値なし
function getComment($string){
  echo $string;
}

getComment("getCommentの実行");

// 引数なし
// 戻り値あり
function getNumberOfComment() {
  return 5;
}

$number = getNumberOfComment();
echo $number;

// 引数2つ
// 戻り値あり
function sumPrice($int1, $int2) {
  $int3 = $int1 + $int2;
  return $int3;
}
$price = sumPrice(10,5);
echo $price;

?>