<?php
//関数の宣言
function myfunc(int $i)
{
    //＄iの値を二倍にする
    $i *= 2; //$i = $i * 2"と同じ意味を持つ、複合演算子の書き方です
    //値を確認する
    echo "in myfunc, i is {$i} \n";
}

//変数への代入
$i = 10;
//関数の実行
myfunc($i);
//変数iの中身の確認
echo "i is {$i} \n";
