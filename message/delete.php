<?php 
require_once 'conn.php';
$id = $_GET['id']; 
$sql="delete from message where id=".$id; 
mysql_query($sql);
echo "删除成功</br>";
?> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<a href="main_message.php">返回通讯录查看界面</a>