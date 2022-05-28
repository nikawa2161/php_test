<?php


// 指定文字列で分割します。

$str = "文字列を、分割します。";

echo "<pre>";
var_dump(explode("、", $str));
echo "</pre>";

// 正規表現
echo preg_match('/文字列/', $str);

// 指定文字列から文字列を所得する

echo substr('abcd', 1);
// 文字列の場合
echo mb_substr("かきくけこ", 3);

?>