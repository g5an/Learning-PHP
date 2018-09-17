<?php
// 常量自动全局，设置常量使用define()函数
define("contant_name", "value", true);   //可选的第三个参数规定常量名是否对大小写不敏感。默认是 false
echo contant_name;    //常量前面不用$符号  输出value

/*
输出结果
value
*/

?>
