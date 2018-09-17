<?php
/*
字符串运算符
 .串接    .=串接赋值    
 相当于赋值运算符的+ 跟+=
*/
$str1 = "hello";
$str2 = $str1 . "world";
echo $str2;                 //hello world
$str3 = "hello";
$str3 .= "world";
echo $str3;                //hello world

/*
递增/递减运算符   ++$i  $i++  --$i  $i--
*/
$i=10;
echo ++$i;     //输出11  值变成11
echo $i++;     //输出11  值变成12
echo --$i;     //输出11  值变成11
echo $i--;     //输出11  值变成10
echo $i;

/*
比较运算符：除了常见的  等于==  不等于!=  大于>  小于<  大于或等于>=   小于或等于 <=
还有两个特别的 ===全等(类型、值完全相同)    !==不等于(类型、值完全不同)
*/
$t1=10;
$t2="100";
//var_dump 输出
var_dump ($t1 == $t2);   //输出 boolean false
var_dump ($t1 === $t2);  //输出 boolean false
var_dump ($t1 != $t2);   //输出 boolean true
var_dump ($t1 !== $t2);  //输出 boolean true
?>
