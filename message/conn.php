<?php 
$conn =@mysql_connect("localhost","root","") or die("数据库连接失败");
   mysql_select_db("tongxun",$conn);
   mysql_query("set names 'utf8'");

?>      
   