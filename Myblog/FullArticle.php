<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的博客</title>
<!-- 引用样式 -->
<link rel="stylesheet"  type="text/css" href="css/personal.css">

</head>

<body>
<div class="biaotilan1">
    My Blog 创作中心
</div>
<div class="biaotilan2">
   <a href='writeBlog.php'>
    <button style=" width:100px;height:40px;background-color:#fff; font-size:20px; color:#666; font-weight:bolder; border:none; outline:none">写博客
</button>
</a>
</div>   
<div class="biaotilan3" >  
   <?php                                         //获得姓名
	include("conn.php");
	session_start();
   	$phone = $_SESSION['phone'];
	$sql = mysql_query("SELECT name FROM register WHERE phone = $phone ");

	while($row = mysql_fetch_array($sql))
  	{
  		echo  $row['name'];
  		echo "<br />";
  	}

	mysql_close($conn);
?>
</div>  
<div class="biaotilan4">  
<a href="index.php">
  <button style=" width:120px;height:40px;background-color:#FFF; font-size:20px; color:#666; font-weight:bolder; border:none; outline:none">退出</button>
</a>  
</div>  
  
<div class="graybox"> </div> 
<div class="graybox1"> </div> 
<div class="graybox2"> </div>  
<div class="graybox3"> </div>  
<div class="bigbox">  
 <div class="nav2">
<textarea name="title" style=" width:860px; height:30px; line-height:30px; resize:none; 
color:#777; background-color:#eee; font-size:20px; border:none">
<?php
	include("conn.php");
	$articleID = $_GET['Id'];
	$sql = mysql_query("SELECT * FROM article WHERE Id = $articleID  ");
	while($row = mysql_fetch_array($sql))
	{
	echo $row['title'];
	}
	mysql_close($conn);
?>
</textarea>
<br/><br/>
<textarea name="content"  style=" width:860px; height:500px; resize:none; 
color:#777; background-color:#fff; font-size:20px; border:1px solid #eee" >
<?php
	include("conn.php");
	$articleID = $_GET['Id'];
	$sql = mysql_query("SELECT * FROM article WHERE Id = $articleID  ");
	while($row = mysql_fetch_array($sql))
	{
	echo $row['content'];
	}
	mysql_close($conn);
	
?>
</textarea>

<br/><br/>
<label style="color:#999"><?php
	include("conn.php");
	$articleID = $_GET['Id'];
	$sql = mysql_query("SELECT * FROM article WHERE Id = $articleID  ");
	while($row = mysql_fetch_array($sql))
	{
		echo '个人分类：';
		echo $row['PersonalType'];
		echo '<br/><br/>';
		echo '文章类型：';
		echo $row['EssayType'];
		echo '<br/><br/>';
		echo '博客分类：';
		echo $row['BlogType'];
		echo '<br/><br/>';
		echo '发布时间：';
		echo $row['DataTime'];
		echo '<br/><br/>';
		
	}
	mysql_close($conn);
	
?></label>

<a href="Article-Management.php">
<button value="返回">返回</button>
</a>
 </div>
 
<div class="nav">
<ul>
<li><a href='Article-Management.php'>文章管理</a></li>
<li><a href='Review-Management.php'>评论管理</a></li>
<li><a href='Classification-Management.php'>个人分类管理</a></li>
</br>
<li><a href='zhuye.php'>返回首页</a></li>
</ul>
</div>
</div> 
</body>
</html>
