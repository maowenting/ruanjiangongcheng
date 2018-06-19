<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>评论管理</title>
<!-- 引用样式 -->
<link rel="stylesheet"  type="text/css" href="css/personal.css">

</head>

<body>
<div class="biaotilan1">
    My Blog 创作中心
</div>
<div class="biaotilan2">
   <a href='writeBlog.php '>
    <button style=" width:100px;height:40px;background-color:#fff; font-size:20px; color:#666; font-weight:bolder; border:none; outline:none">写博客
</button>
</a>
</div>   
<div class="biaotilan3" >  
   <?php
	include("conn.php");
	session_start();
   	$phone = $_SESSION['phone'];
	$sql = mysql_query("SELECT name FROM register WHERE phone = $phone ");

	while($row = mysql_fetch_array($sql))
  	{
  		echo  $row['name'];
  		echo "<br />";
  	}

	mysql_close($conn);
?>
</div>  
<div class="biaotilan4">  
  <a href="index.php">
  <button style=" width:120px;height:40px;background-color:#FFF; font-size:20px; color:#666; font-weight:bolder; border:none; outline:none">退出</button>
</a></div>  
  
<div class="graybox"> </div> 
<div class="graybox1"> </div> 
<div class="graybox2"> </div>  
<div class="graybox3"> </div>  
 <div class="bigbox"> 
 
<div class="nav2">
<font color="#999">评论管理</font>
</br></br>

<a href="Review-submit1.php"><input type="button" value="我的文章评论"></a>
<a href="Review-submit2.php"><input type="button" value="我发表的评论"></a>
</br></br>

<table>
	<tr>
		<td><font color="#999"><label style="width:150px;display:block;">文章标题</label></font></td>
		<td><font color="#999"><label style="width:150px;display:block;">博客作者</label></font></td>
		<td><font color="#999"><label style="width:150px;display:block;">评论作者</label></font></td>
		<td><font color="#999"><label style="width:200px;display:block;">发表时间</label></font></td>
		<td><font color="#999"><label style="width:150px;display:block;">评论内容</label></font></td>
		<td><font color="#999"><label style="width:150px;display:block;">操作</label></font></td>
	</tr>
</table>
<br/>  
            
<?php                                                            //我的文章的评论
	include("conn.php");
	session_start();
   	$commentphone = $_SESSION['phone'];
	$sql = mysql_query("SELECT * FROM comment WHERE CommentPhone = $commentphone "); //$CommentPhone是文章作者的账号
	while($row = mysql_fetch_array($sql)){
		//$row = mysql_fetch_array($sql);
		$articleID = $row['ArticleID'];

	$commentID = $row['phone'];
	$sql2 = mysql_query("SELECT * FROM article WHERE Id = $articleID "); //Id是文章ID
	$row2 = mysql_fetch_array($sql2);
	$sql3 = mysql_query("SELECT * FROM register WHERE phone = $commentphone");
	$row3 = mysql_fetch_array($sql3);
	$sql4 = mysql_query("SELECT * FROM register WHERE phone = $commentID");
	$row4 = mysql_fetch_array($sql4);
?>

<table>
	<tr>
		<td><font color="#999"><label style="width:150px;display:block; overflow:hidden; overflow:hidden; white-space:nowrap;"><?php echo $row2['title'];?>
			</label></font></td>
		<td><font color="#999"><label style="width:150px;display:block;"><?php echo $row3['name'];?></label></font></td>
		<td><font color="#999"><label style="width:150px;display:block;"><?php echo $row4['name'];?></label></font></td>
		<td><font color="#999"><label style="width:200px;display:block;"><?php echo $row['DataTime'];?></label></font></td>
		<td><font color="#999"><label style="width:150px;display:block; overflow:hidden; white-space:nowrap;"><?php echo $row['CommentContent'];?></label></font></td>
		<td><a href='deleteReview.php?id=<?php echo $row['Id'];?>'><font color="#999"><label style=" width:150px;display:block;text-decoration:underline;">删除</label></font></a></td>
	</tr>
</table>
<?php	
	}
	mysql_close($conn);	
?>





</div>
 
  <div class="nav">
<ul>
<li><a href='Article-Management.php'>文章管理</a></li>
<li><a href='Review-Management.php'>评论管理</a></li>
<li><a href='Classification-Management.php'>个人分类管理</a></li>
</br>
<li><a href='zhuye.php'>返回首页</a></li>
<li><a href='ChangePWD.php'>修改密码</a></li>

</ul>
</div>
</div>
</body>
</html>
