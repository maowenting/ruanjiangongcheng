<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>写博客</title>
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
</a>  
</div>  
  
<div class="graybox"> </div> 
<div class="graybox1"> </div> 
<div class="graybox2"> </div>  
<div class="graybox3"> </div>  
<div class="bigbox">  
 <div class="nav2">
<form action="writeBlog_submit.php" method="post">
<textarea name="title" placeholder="输入文章标题" style=" width:860px; height:30px; line-height:30px; resize:none; 
color:#777; background-color:#eee; font-size:20px; border:none">
</textarea>
<br/><br/>
<textarea name="content" placeholder="输入文章内容" style=" width:860px; height:800px; resize:none; 
color:#777; background-color:#fff; font-size:20px; border:1px solid #eee" >
</textarea>

<br/><br/>
<label>个人分类&nbsp;&nbsp;
<select id="selPersonalType" name="personaltype" style="width:200px; height:30px;">
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
</label>

<br/><br/>
<label>文章类型</label>&nbsp;&nbsp;
<select id="selType" name="essaytype" style="width:200px; height:30px;">
     <option value="未选择">请选择</option>
     <option value="原创">原创</option>
     <option value="转载">转载</option>
     <option value="翻译">翻译</option>
</select>
<label>博客分类</label>&nbsp;&nbsp;
<select class="droBlogType" id="radChl" name="blogtype" style="width:200px;height:30px;">
	<option value="未选择">选择分类</option>                                 
	<option value="大数据">大数据</option>
	<option value="游戏开发">游戏开发</option>
	<option value="运维">运维</option>
	<option value="前端">前端</option>
    <option value="后端">后端</option>
    <option value="安全">安全</option>
    <option value="计算机理论与基础">计算机理论与基础</option>
    <option value="其他">其他</option>
</select>
<br/><br/>
<button type="submit" value="提交">发布微博
</button>
</form>
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
