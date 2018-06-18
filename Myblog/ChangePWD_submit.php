<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head> 
 <?php
 	session_start();
   	$phone = $_SESSION['phone'];
	$psw1 = $_POST['password1'];
	$psw2 = $_POST['password2'];
	$psw3 = $_POST['password3'];
	
	if($psw1=="")
	{
		echo"<script>alert('原始密码不能为空');</script>";
		header('location:ChangePWD.php');
		die;
		}
	include("conn.php");
	$sql = mysql_query("SELECT * FROM login WHERE phone=$phone");
	while($row = mysql_fetch_array($sql))
  	{
  		$password = $row['password'];
  	}

	if($password!=$psw1)
	{
		echo"<script>alert('原始密码错误');</script>";
		header('location:ChangePWD.php');
		die;
		}
	else if($password==$psw1){
		if($psw2!=$psw3){
			echo"<script>alert('新密码确认错误');</script>";
			header('location:ChangePWD.php');
			die;
		}
		else if($psw2==$psw3){

			$sql2 = mysql_query("UPDATE login SET password = $psw2 WHERE phone=$phone");
			
			$sql3 = mysql_query("UPDATE register SET password = $psw2 WHERE phone=$phone");
			mysql_close($conn);
			
			header('location:login.php');
			die;
		}
		
		header("location:ChangePWD.php?phone=$phone");
		die;

		}
	$phone = "";
	$psw = "";
  ?>

</html>