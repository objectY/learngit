<?php
include("conn.php");
$id = $_GET['id']; 
$sq="select * from message where id=".$id; 
$sp=mysql_query($sq);
	$gp=mysql_fetch_array($sp);

if (isset($_POST['submit']) && $_POST['submit']) {
	 $sql="update message set name='$_POST[name]',phone='$_POST[phone]',sex='$_POST[sex]',birth='$_POST[birth]' where id='$_POST[id]'";
	 mysql_query($sql);
 echo "输出成功。";
 ?>
 <a href="main_message.php">跳转通讯录页面</a>
 <?
	}


?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form action ="gai.php" method="post" >
姓名：<input type="text" name="name" value="<?=$gp['name']?>"/> <br>
<input type="hidden" name="id" value="<?=$gp['id']?>"/>
电话：<input type="text" name="phone" value="<?=$gp['phone']?>"/><br>
性别：<input type="text" name="sex" value="<?=$gp['sex']?>"/><br>
出生年月日：<input type="text" name="birth" value="<?=$gp['birth']?>"/><br>
<input type="submit" name="submit" value="修改"/>
</form>


