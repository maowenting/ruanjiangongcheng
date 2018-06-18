<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文章管理</title>
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
   <?php
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
</a> </div> 
  
<div class="graybox"> </div> 
<div class="graybox1"> </div> 
<div class="graybox2"> </div>  
<div class="graybox3"> </div>  
<div class="bigbox">  


 <div class="nav2">

<font color="#999">文章管理</font>
</br></br>
<form action="Acticle-Management_submit.php" method="post">
<font color="#999">发布时间：</font>
<select name="Year">
	<option value="不限">不限</option>
	<option value="2018">2018</option>
	<option value="2017">2017</option>
	<option value="2016">2016</option>
	<option value="2015">2015</option>
	<option value="2014">2014</option>
	<!--<input class="iInput" />-->
</select>
<font color="#999">年</font>
<select name="Month">
	<option value="不限">不限</option>
	<option value="01">01</option>
	<option value="02">02</option>
	<option value="03">03</option>
	<option value="04">04</option>
	<option value="05">05</option>
	<option value="06">06</option>
	<option value="07">07</option>
	<option value="08">08</option>
	<option value="09">09</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<!--<input class="iInput" />-->
</select>
<font color="#999">月</font>
&nbsp;&nbsp;<font color="#999">个人分类</font>
<select name="PersonalType">
    <option value="未选择">请选择</option>
	 <?php
	include("conn.php");
	session_start();
   	$phone = $_SESSION['phone'];
	$sql = mysql_query("SELECT TypeName FROM articletype WHERE phone = $phone ");

	while($row = mysql_fetch_array($sql))
  	{?>
    <option value="<?php echo  $row['TypeName'];?>"><?php echo  $row['TypeName'];?></option>
    <?php
  	}
	mysql_close($conn);
?>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="搜  索">
<br />
	<label style="display:inline-block; width:100px; margin-bottom:10px;  margin-top:15px; color:#777">标题&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <label style="display:inline-block; width:300px; margin-bottom:10px; margin-top:15px; color:#777">内容&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <label style="display:inline-block; width:100px; margin-bottom:10px; margin-top:15px; color:#777">个人分类&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <label style="display:inline-block; width:100px; margin-bottom:10px; margin-top:15px; color:#777">文章类型&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <label style="display:inline-block; width:100px; margin-bottom:10px; margin-top:15px; color:#777">博客分类&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<label style="display:inline-block; width:200px; margin-bottom:10px; margin-top:15px; color:#777">时间&nbsp;&nbsp;&nbsp;&nbsp;</label>
<?php
	include("conn.php");
	session_start();
   	$phone = $_SESSION['phone'];
	$sql = mysql_query("SELECT * FROM article WHERE phone = $phone ");

	while($row = mysql_fetch_array($sql))
  	{	echo "<br />";
	?>
    <a href="FullArticle.php" style="display:inline-block; width:100px;"><?php echo  $row['title']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</a>
    <label style="display:inline-block; width:300px; margin-top:5px;"><?php echo  substr($row['content'],0,40); ?>...&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <label style="display:inline-block; width:100px; margin-top:5px;"><?php echo  $row['PersonalType']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <label style="display:inline-block; width:100px; margin-top:5px;"><?php echo  $row['EssayType']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <label style="display:inline-block; width:100px; margin-top:5px;"><?php echo  $row['BlogType']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<label style="display:inline-block; width:200px; margin-top:5px;"><?php echo  $row['DataTime']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</label>	
  	<?php	
  	}

	mysql_close($conn);
?>


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
