<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head> 
 <?php
 	session_start();
   	$phone = $_SESSION['phone'];
	$id = $_GET['id'];
	echo $id;
	include("conn.php");
	$sql = mysql_query("DELETE FROM comment WHERE Id = $id ");	
	mysql_close();
	header("location:Review-Management.php?phone=$phone");
	die;
?>

</html>