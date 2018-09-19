<?php
    //连接数据库
    $con=mysql_connect("192.168.31.31:3306"."root","password");
    if(!$con)
    {
        die('could not connect '.mysql_error());
    }

    //创建数据库
    if(mysql_query("CREATE DATABASE my_db",$con))
    {
        echo "Database created";
    }
    else
    {
        echo "Error creating database:" . mysql_error() ;
    }
    
    //在my_db上创建数据表,
    mysql_select_db("my_db",$con);
    $sql="CREATE TABLE Persions
    (
        FirstName varchar(15),
        LastName varchar(15),
        Age int 
    )";
    mysql_query($sql,$con);
    
    //在my_db插入数据
    mysql_query("INSERT INTO Persons(FirstName,LastName,Age)
    VALUES('Guan','hong','22')");
    mysql_query("INSERT INTO Persons(FirstName,LastName,Age)
    VALUES('li','leo','23')");

    //select and where
    $result = mysql_query("SELECT * FROM Persons WHERE FirstName='Guan");
    while($row = mysql_fetch_array($result))
    {
        echo $row['FirstName'] . "" . $row['LastName'];
        echo "<br />";
    }

    //ORDER BY  排序
    $result2 = mysql_query("SELECT * FROM Persons ORDER　BY　");
    while($row = mysql_fetch_array($result2))
    {
        echo $row['FirstName'] . "" . $row['LastName'];
        echo "<br />";
    }

    //修改数据库
    mysql_query("UPDATE Persons SET Age = '28' WHERE FirstName = 'Guan' AND LastName = 'hong'");

    //删除数据库
    mysql_query("DELETE FROM Persons WHERE LastName='hong'");
    
    mysql_close($con);
?>