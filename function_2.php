<?php

// 文字列の長さ

$text = "abc";

echo strlen($text);

// UTF-8 日本語は3~6バイト
$string = "あいうえお";

echo strlen($string);

// 日本語の文字数なら
echo mb_strlen($string);

// 文字列の置換

$str = "文字列を置換します";

echo str_replace('置換', 'ちかん', $str);


?>