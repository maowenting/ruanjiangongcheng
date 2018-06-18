<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改密码</title>
<!-- 引用样式 -->
<link rel="stylesheet"  type="text/css" href="css/personal.css">
<style>
.login{
	margin-left:250px;
	margin-right:300px;
	margin-top:100px;
	height:400px;
	border:2px solid #CCC;

	}
.login p{
	margin-left:20px;
	margin-top:20px;
	font-size:22px;
	}
.login textarea{
	margin-left:20px;
	width:90%;
	font-size:22px;
	height:30px;
	resize:none;
	}
.login button{
	margin-top:20px;
	margin-left:20px;
	width:90%;
	font-size:22px;
	height:40px;
	background-color:#B00;
	color:#fff;
	}
</style>
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
	<div class="login">
	<form action="ChangePWD_submit.php" method="post">
	<p>原始密码</p>  
    <input type="password" name="password1" style="width:90%; height:30px; margin-left:20px; font-size:24px" />
    <p>新密码</p>  
	<input type="password" name="password2" style="width:90%; height:30px; margin-left:20px; font-size:24px" />
	<p>确认密码</p>  
	<input type="password" name="password3" style="width:90%; height:30px; margin-left:20px; font-size:24px" />
	
    <button type="submit" value="提交">确认修改</button>
    </form>
    <br />
</div> 
 </div>
 
<div class="nav">
<ul>
<li><a href='Article-Management.php'>文章管理</a></li>
<li><a href='Review-Management.php'>评论管理</a></li>
<li><a href='Classification-Management.php'>个人分类管理</a></li>
</br>
<li><a href='zhuye.php'>返回首页</a></li>
<li><a href='ChangePWD.php'>修改密码</a></li>
</ul>
</div>
</div> 
</body>
</html>
