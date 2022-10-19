<?php

//ファイルの読み込み
require_once( __DIR__ . "/WEBCAMP_log.php");

//「名前空間付き」のクラスを使う（完全修飾名）
$obj = new \WEBCAMP\log();
$obj->test();