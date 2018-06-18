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
<input type="button" value="全  部">
<input type="button" value="已发表">
<input type="button" value="私  密">
<input type="button" value="草稿箱">
<input type="button" value="回收站">
</br></br>
<font color="#999">发布时间：</font>
<select>
	<option value="不限">不限</option>
	<option value="2017">2018</option>
	<option value="2017">2017</option>
	<option value="2017">2016</option>
	<option value="2017">2015</option>
	<option value="2017">2014</option>
	<!--<input class="iInput" />-->
</select>
<font color="#999">年</font>
<select>
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
&nbsp;&nbsp;
<select>
	<option value="选择个人分类">选择个人分类</option>
</select>
&nbsp;&nbsp;
<input type="text" value="仅支持标题关键词搜索" onfocus="javascript:if(this.value=='仅支持标题关键词搜索')this.value='';" />
&nbsp;&nbsp;
<input type="button" value="搜  索">
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
