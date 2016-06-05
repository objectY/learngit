<?php
include("conn.php");

if (isset($_POST['submit']) && $_POST['submit']) {
	 $sql="insert into message(id,name,phone,sex,birth)".
	 "values('','$_POST[name]','$_POST[phone]','$_POST[sex]','$_POST[birth]')";
	 mysql_query($sql);
 echo "输出成功。";
 ?>
 <a href="main_message.php">跳转通讯录页面</a>
 <?
	}


?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form action ="write.php" method="post" >
姓名：<input type="text" name="name"/> <br>
电话：<input type="text" name="phone"/><br>
性别：<input type="text" name="sex"/><br>
出生年月日：<input type="text" name="birth"/><br>
<input type="submit" name="submit" value="记录"/>
</form>


