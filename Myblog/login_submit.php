<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head> 
 <?php
    $phone = $_POST['phone'];
	$psw = $_POST['password'];
	include("conn.php");
	$sql = mysql_query("SELECT * FROM login WHERE phone=$phone");
	while($row = mysql_fetch_array($sql))
  	{
  		$password = $row['password'];
  	}

	if($password!=$psw)
	{
		echo"<script>alert('密码错误');</script>";
		header('Refresh:1,Url=login.php');
		die;
		}
	else{
		mysql_close();
		header("location:zhuye.php?phone=$phone");
		die;

		}
	$phone = "";
	$psw = "";
    ?>

</html>