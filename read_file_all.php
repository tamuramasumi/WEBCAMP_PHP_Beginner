<?php
//ファイル名の把握
$first_name = __FILE__;

//ファイル全体の読み込み
$file_string = file_get_contents($first_name);

//出力
var_dump($file_string);
