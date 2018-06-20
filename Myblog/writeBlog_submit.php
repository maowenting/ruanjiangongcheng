<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head> 
<?php
	include("conn.php");
	session_start();
   	$phone = $_SESSION['phone'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$PersonalType = $_POST['personaltype'];
	$EssayType = $_POST['essaytype'];
	$BlogType = $_POST['blogtype'];
	date_default_timezone_set('PRC');
	$DataTime = date('y-m-d H:i:s',time());
	$sql = mysql_query("INSERT INTO article (title,content,PersonalType,EssayType,BlogType,phone,DataTime) values 	('$title','$content','$PersonalType','$EssayType','$BlogType','$phone','$DataTime')");
	mysql_close($conn);
	header('location:Article-Management.php');
	die;
?>

</html>