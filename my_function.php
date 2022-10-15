<?php
//「引数の値を二倍にする」関数
function numToDouble(int $i): int
{
    //値を二倍にする
    $ret = $i * 2;
    
    //戻り値
    return $ret;
}

//
$num = numToDouble(10);
echo "10 を二倍にしたら {$num} になった \n";

//二つの引数を「加算する」関数
function numAdd(int $a, int $b): int
{
    //加算する
    $ret = $a + $b;
    
    //戻り値
    return $ret;
}
//
$add = numAdd(5, 6);
echo "5と 6を足したら　{$add}になった \n";
