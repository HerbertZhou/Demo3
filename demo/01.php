<?php
echo 'hello word';echo"<br>";
$txt="Hello word";
echo $txt;echo "<br>";
//数组
$cars=array("volvo","b");
echo "my {$cars[0]}";echo"<br>";
//查询指定字符串
echo strpos("Hello Word","Word");echo"<br>";
//字符串长度
echo strlen("Hello world!");echo"<br>";
//define()定义常量
define("GRETING","Welcome to W3School.com.cn!");
echo GRETING;

?>