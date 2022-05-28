<?php

$postalCode = '123-4567';

// camelCase
function checkPostalCode($str) {
  // 指定した文字を空白に。
  $replaced = str_replace('-','',$str);
  $length = strlen($replaced);

  if($length === 7) {
    return True;
  }
  return false;
}

var_dump(checkPostalCode($postalCode));

?>