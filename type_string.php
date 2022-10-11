<?php

$s = "Hello";
var_dump($s);
echo $s[1] , "\n";

//マルチバイトで0文字目にアクセス
$muiti_string = "あいうえお";
var_dump($muiti_string);
echo $muiti_string[0] , "\n";

//「数字」と「数値」
$num_i = 123;
$num_s = "123";
var_dump($num_i);
var_dump($num_s);


