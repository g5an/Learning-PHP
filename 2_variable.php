<?php
/**
 * Created by PhpStorm.
 * User: Hong
 * Date: 2018/9/14
 * Time: 10:54
 */
$x=5;
$y=6;
// x y 是全局global变量，只能在函数外部使用，要在函数内部调用，需要加上global
    function my1() {
        global $x,$y;
        $z=$x+$y;
        echo $z,$x;
    }

    function my1_1() {
        echo $x,$y;
    }

// 全局变量存储在$GLOBALS[index]数组里，可以通过$GLOBALS[index]对全局变量进行更新修改
    function my2(){
        $GLOBALS[y]=$GLOBALS[x] + $GLOBALS[y];
    }
    echo $y;

//变量在函数调用完后，就会删除，如果想保留，就在一开始用static声明
    function my3() {
        static $a= 0;
        echo $a;
        $a++;
    }
    my3();
    my3();
    my3();
?>