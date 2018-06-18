<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册</title>
<!-- 引用样式 -->
<link rel="stylesheet"  type="text/css" href="css/personal.css">
<style>
.login{
	margin-left:500px;
	margin-right:500px;
	margin-top:100px;
	height:700px;
	border:2px solid #CCC;

	}
.login p{
	margin-left:20px;
	margin-top:15px;
	font-size:20px;
	}
.login textarea{
	margin-left:20px;
	width:90%;
	font-size:18px;
	height:24px;
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

<div class="login">
    <form action="register_submit.php" method="post">
	<p>手机</p>  
    <textarea name="phone"> </textarea>
    <p>姓名</p>  
    <textarea name="name"></textarea>
    <p>密码</p>  
    <textarea name="password"></textarea>
    <p>再次输入密码</p>  
    <textarea name="password2"></textarea>
    <p>性别</p>  
    <textarea name="sex"></textarea>
    <p>邮箱</p>  
    <textarea name="email"></textarea>
  	
    <button type="submit" value="提交" >注册</button>
    </form>
    <p><a href="login.php" >返回登录 </a><a href="index.php" style="float:right; margin-right:25px;">返回首页 </a></p>

</div> 
</body>
</html>
