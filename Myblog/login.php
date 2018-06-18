<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录</title>
<!-- 引用样式 -->
<link rel="stylesheet"  type="text/css" href="css/personal.css">
<style>
.login{
	margin-left:500px;
	margin-right:500px;
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

<div class="login">
	<form action="login_submit.php" method="post">
	<p>账号</p>  
    <textarea name="phone"></textarea>
    <p>密码</p>  
   <input type="password" name="password" style="width:465px; height:30px; margin-left:20px; font-size:24px" />
    <button type="submit" value="提交">登录
    
    </button>
    </form>
    <br />
    <p>还没有账号？ <a href="register.php">立即注册</a> </p>
    <p><a href="index.php" >返回首页 </a></p>
</div> 
</body>
</html>
