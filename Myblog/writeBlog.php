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
   <a href='writeBlog.php?phone=
   <?php
   echo $_GET['phone'];
   ?>
   '>
    <button style=" width:100px;height:40px;background-color:#fff; font-size:20px; color:#666; font-weight:bolder; border:none; outline:none">写博客
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
</a>  
</div>  
  
<div class="graybox"> </div> 
<div class="graybox1"> </div> 
<div class="graybox2"> </div>  
<div class="graybox3"> </div>  
<div class="bigbox">  
 <div class="nav2">
 
<textarea style=" width:860px; height:30px; line-height:30px; resize:none; 
color:#777; background-color:#eee; font-size:20px; border:none">
输入文章标题
</textarea>
<br/><br/>
<textarea style=" width:860px; height:800px; resize:none; 
color:#777; background-color:#fff; font-size:20px; border:1px solid #eee">
输入文章内容
</textarea>
<br/><br/>
<label>个人分类：</label><button>添加新分类</button><br/><br/>
<label>文章类型</label>&nbsp;&nbsp;
<select id="selType" style="width:200px; height:30px;">
     <option value="0">请选择</option>
     <option value="1">原创</option>
     <option value="2">转载</option>
     <option value="3">翻译</option>
</select>
<label>博客分类</label>&nbsp;&nbsp;
<select class="droBlogType" id="radChl" name="radChl" style="width:200px;height:30px;">
	<option value="0">选择分类</option>                                 
	<option value="1">大数据</option>
	<option value="2">游戏开发</option>
	<option value="3">运维</option>
	<option value="4">前端</option>
    <option value="5">后端</option>
    <option value="6">安全</option>
    <option value="7">计算机理论与基础</option>
</select>
<br/><br/>
<button>发布微博</button>&nbsp;&nbsp;<button>返回</button>
 </div>
 
<div class="nav">
<ul>
<li><a href='Article-Management.php?phone=
   <?php
   echo $_GET['phone'];
   ?>
   '>文章管理</a></li>
<li>
	<a href='Review-Management.php?phone=
   <?php
   echo $_GET['phone'];
   ?>
   '>评论管理</a></li>
<li>
	<a href='Classification-Management.php?phone=
   <?php
   echo $_GET['phone'];
   ?>
   '>个人分类管理</a></li>
</ul>
</div>
</div> 
</body>
</html>
