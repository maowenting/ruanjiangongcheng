<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head> 
<?php
	include("conn.php");
	$comment = $_POST['comment'];
	$articleID = $_POST['ArticleID'];
	session_start();
   	$phone = $_SESSION['phone'];
	$DataTime = date('y-m-d h:i:s',time());
	$sql = mysql_query("INSERT INTO comment (ArticleID,CommentContent,phone,DataTime) values ('$articleID','$comment','$phone','DataTime')");
	mysql_close($conn);

	header('location:FullArticle.php?Id='.$articleID);
	die;
?>

</html>