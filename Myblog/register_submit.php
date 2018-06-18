<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head> 
 <?php
    $phone = $_POST['phone'];
	$name = $_POST['name'];
	$psw = $_POST['password'];
	$psw2 = $_POST['password2'];
	$sex = $_POST['sex'];
	$email = $_POST['email'];
	if($phone==""||$email==""||$name==""||$psw==""||$sex==""||$psw2==""){
		echo"<script>alert('输入不得为空！');</script>";
		header('location:register.php');
	die;
	}
	else if($psw!=$psw2){
		echo"<script>alert('两次密码输入不一致！');</script>";
		header('location:register.php');
	die;
	}
	else{
	include("conn.php");
	$sql = mysql_query("INSERT INTO register (phone,name,password,sex,email) values ('$phone','$name','$psw','$sex','$email')");
	mysql_close();
	include("conn.php");
	$sql2 = mysql_query("INSERT INTO login (phone,password) values ('$phone','$psw')");
	mysql_close();
	header('location:login.php');
	die;
	}
    ?>

</html>