<?php
//ファイルの読み込み
require_once( __DIR__ . "/WEBCAMP_log.php");
//
use WEBCAMP\log;


//「名前空間付き」のクラスを使う（非修飾名）
$obj = new log();
$obj->test();