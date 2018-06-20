<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head> 
<?php
	include("conn.php");
	session_start();
   	$phone = $_SESSION['phone'];
	date_default_timezone_set('PRC');
	$Time = date('y-m-d H:i:s',time());
	$comment = $_POST['comment'];
	$articleID = $_POST['ArticleID'];
	$sql = mysql_query("INSERT INTO comment (ArticleID,CommentContent,phone,DataTime) values ('$articleID','$comment','$phone','$Time')");
	mysql_close($conn);

	header('location:FullArticle.php?Id='.$articleID);
	die;
?>

</html>