<?php
//
class 親クラス
{
    //
    public function 親メソッド()
    {
        echo "親クラス　内　親メソッド \n";
    }
    //
    public function メソッド()
    {
        echo "親クラス　内　メソッド \n";
    }
}
//
class 子クラス extends 親クラス
{
    //
    public function 子メソッド()
    {
        echo "子クラス　内　子メソッド \n";
    }
    public function メソッド()
    {
        echo "子クラス　内　メソッド \n";
    }
}

//
$obj = new 子クラス();
$obj->親メソッド(); // 「自分にないメソッドでも、親が持っていたら親のメソッドをそまま使える
$obj->子メソッド();
$obj->メソッド(); //「親でも自分でも定義されているメソッドは自分優先
