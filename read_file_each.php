<?php
//ファイル名の把握
$first_name = __FILE__;

//ファイルのopen
$fie_obj = new SplFileObject($first_name);

//各行を読み込んで出力する
foreach($fie_obj as $no => $line) {
    echo "{$no}: $line";
}