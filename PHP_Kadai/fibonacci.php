<?php

//変数に代入
$i = 0;
$j = 1;

echo "{$i}\n";
echo "{$j}\n";

while( ($k = $i + $j)< 10000) {
    echo $k = $i + $j;
    echo "\n";
    $i = $j;
    $j = $k;
    if($k >=10000) {
        break;
    }
    ++$k;
}
echo "{$k} \n";