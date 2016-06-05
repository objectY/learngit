<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<link href="css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="images/main/favicon.ico" />
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(images/main/add.jpg) no-repeat 0px 6px; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9}
#addinfo{ padding:0 0 10px 0;}
.changepage{
    float: left;
    width: 100%;
    height: 50px;
    text-align: center;
}
.changepage a{
    margin-bottom: 20px;
    padding: 5px;
}
</style>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top" id="addinfo">您的位置：通讯录信息查看</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
		<th align="center" valign="middle" class="borderright">序号</th>
        <th align="center" valign="middle" class="borderright">姓名</th>
        <th align="center" valign="middle" class="borderright">电话号</th>
  		<th align="center" valign="middle" class="borderright">性别</th>
        <th align="center" valign="middle" class="borderright">出生年月日</th>
        <th align="center" valign="middle">操作</th>
      </tr>
	   <?php
include"conn.php";
//error_reporting(0);
$page=$_GET['p'];
		$sql="select * from message order by id desc limit ".($page-1)*6 .",6";
$gg=mysql_query($sql);
while($row=mysql_fetch_array($gg)){

?>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
	   <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['id'];?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['name'];?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['phone'];?></a></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['sex'];?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['birth'];?></td>
        <td align="center" valign="middle" class="borderbottom"><a href="listActivity1.php?id=<?=$row['id']?>">显示内容</a><span class="gray">&nbsp;|&nbsp;</span><a href="gai.php?id=<?=$row['id']?>">修改内容</a><span class="gray">&nbsp;|&nbsp;</span><a href="delete.php?id=<?=$row['id']?>">删除</a></td>
      </tr>
      <?
}
	  ?>
    </table></td>
    </tr>
</table>
<div class="changepage">  
<tr>
    <td align="left" valign="top" class="fenye">	  
       <?
	$total_sql="select count(*) from message";
$total_result=mysql_fetch_array(mysql_query($total_sql));
$total=$total_result[0];
$total_pages=ceil($total/6);
$page_banner="";
if($page>1){
	$page_banner .="<a href='" .$_SERVER['PHP_SELF'] . "?p=1'>首页</a>";
	$page_banner .="<a href='" .$_SERVER['PHP_SELF'] . "?p=" .($page-1). "'>上一页</a>";
}
if($page<$total_pages){
$page_banner .="<a href='" .$_SERVER['PHP_SELF'] . "?p=" .($page+1). "'>下一页</a>";
$page_banner .="<a href='" .$_SERVER['PHP_SELF'] . "?p=" .($total_pages). "'>尾页</a>";
}
$page_banner .="共{$total_pages}页";
 echo $page_banner;
 ?>
 </tr>
      </div>
</body>
</html>