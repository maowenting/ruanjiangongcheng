<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>评论管理</title>
<!-- 引用样式 -->
<link rel="stylesheet"  type="text/css" href="css/personal.css">

</head>

<body>
<div class="biaotilan1">
    My Blog 创作中心
</div>
<div class="biaotilan2">
	<br />
   <a href='writeBlog.php?phone=
   <?php
   echo $_GET['phone'];
   ?>
   '>
    <button style=" width:100px;height:40px;background-color:#eee; font-size:20px; color:#666; font-weight:bolder; border:none; outline:none">写博客
</button>
</a>
</div>   
<div class="biaotilan3" >  
   <?php
	include("conn.php");
	$phone = $_GET['phone'];
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
</a></div>  
  
<div class="graybox"> </div> 
<div class="graybox1"> </div> 
<div class="graybox2"> </div>  
<div class="graybox3"> </div>  
 <div class="bigbox"> 
 
<div class="nav2">
<font color="#999">评论管理</font>
</br></br>

<input type="button" value="我的文章评论">
<input type="button" value="我发表的评论">
</br></br>
<textarea name="txt" cols="145" rows="30" wrap="virtual"></textarea>

</div>
 
  <div class="nav">
<ul>
<li><a href="Article-Management.php" target="_self">文章管理</a></li>
<li><a href="Review-Management.php" target="_self">评论管理</a></li>
<li><a href="Classification-Management.php" target="_self">个人分类管理</a></li>
</ul>
</div>
</div>
</body>
</html>
