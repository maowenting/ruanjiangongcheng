<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head> 
 <?php
    $typeid =$_GET['typeid'];
	session_start();
   	$phone = $_SESSION['phone'];
	include("conn.php");
	$sql = mysql_query("DELETE FROM articletype WHERE TypeId=$typeid");
	mysql_close();
	header("location:Classification-Management.php?phone=$phone");
	die;
    ?>

</html>