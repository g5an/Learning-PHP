<?php
    $a1=array("one","two","three",0,1,2);
/*  
    等价于
    $a1[0]="one";
    $a1[1]="two";
    ...
    $a1[5]=2;
*/
    echo count($a1);
    for($x=0;$x<$a1;$x++){
        echo $a1[$x];
        echo "<br>";
    }

/* 
    关联数组
    $a2=array("name"=>"hong","age"=>"23");
    echo "my name is ". $a2['name'];
    foreach($a2 as $i=>i_value){
        echo "Key"= . $i . "Value=" . $i_value;
    }
?>