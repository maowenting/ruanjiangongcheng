<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
<link href="css/base.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
<link href="css/media.css" rel="stylesheet">
<script type="text/javascript" src="js/myfocus-2.0.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/zhuye.css" />

<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->

<!-- 返回顶部调用 begin -->
<script type="text/javascript" src="js/up/jquery.js"></script>
<script type="text/javascript" src="js/up/js.js"></script>
<script type="text/javascript">
//设置
myFocus.set({
	id:'myFocus',//ID
	pattern:'mF_fancy'//风格
});
</script>  
<!-- 返回顶部调用 end-->
<style>

</style>

</head>
	
<body style="background-color:#eee">

<div class="biaotilan1">
    My Blog 创作中心
</div>
<div class="biaotilan2">
	<br />
   <a href='writeBlog.php'>
    <button style=" width:100px;height:40px;background-color:#eee; font-size:20px; color:#666; font-weight:bolder; border:none; outline:none">写博客
</button>
</a>
</div>   
 
<div class="biaotilan3"  style="padding-top:34px;">  	
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
 
<div class="biaotilan4" style="padding-top:34px;">  
	
   <a href="index.php">退出登录</a>
</div>  

<div class="bigbox">
    <div class="nav">
    <ul>
    <li><a href='zhuye.php' style="background-color:#cc0000">推荐</a></li>
    <li><a href='zuixinwenzhang.php'>最新文章</a></li>                      
    <li><a href='zixun.php'>资讯</a></li>
    <li><a href='youxikaifa.php'>游戏开发</a></li>
    <li><a href='qianduan.php'>前端</a></li>
    <li><a href='yunwei.php'>运维</a></li>
    <li><a href='dashuju.php'>大数据</a></li>
    <li><a href='jisuanjijichu.php'>计算机基础</a></li>
    <li><a href='qita.php'>其他</a></li>
    </ul>
    </div>
    <div class="graybox"></div>

    <div id="section">
        <div id="myFocus"><!--焦点图盒子-->
           <div class="loading"></div>
            <!--载入画面(可删除)-->
            <div class="pic"><!--图片列表-->
              <ul>
                <li><a href="#1"><img src="img/1.png" thumb=""/></a></li>
                <li><a href="#2"><img src="img/2.png" thumb=""/></a></li>
                <li><a href="#3"><img src="img/3.png" thumb=""/></a></li>
                <li><a href="#4"><img src="img/4.png" thumb=""/></a></li>
                <li><a href="#5"><img src="img/5.png" thumb=""/></a></li>
              </ul>
            </div>
          </div>
        </div>	
        <div class="focustext f_r">
          <section class="ft01">
            <h3><a href="/" target="_blank">超高逼格程序员行为规范！</a></h3>
            <p>一. 开始准备工作</br>二. 从进门开始</br>三. 坐下就不要再动</br> 四. 一定用高端，不管实用不实用</br>五. 最后潇洒地离开</p>
          </section>
          <section class="ft02">
            <h3><a href="/" target="_blank">面试有哪些“邪招”可以提高成功率？</a></h3>
             <p> 这个问题是大错特错的，因为现实情况是：你想要为之工作的雇主、平台、招聘经理越优秀，技巧的作用就越小。事实上，在大多数情况下，他们可能会因为这些技巧，将你踢出，他们知道挑选出真正优秀的人才。</p>
          </section>
        </div>
    
    
        <div class="topnews">
          <b>文章</b>推荐</h2>
          
          <?php 
		  	include("conn.php");
			session_start();
   			$phone = $_SESSION['phone'];
			$sql = mysql_query("SELECT * FROM article");
			
			while($row = mysql_fetch_array($sql))
  			{	
				$CommentNum = 0;
				$ArticleId = $row['Id'];
				$sqlnum = mysql_query("SELECT * FROM comment WHERE ArticleID = $ArticleId ");
				while($rrow = mysql_fetch_array($sqlnum)){
					$CommentNum++;
					}
				?>
            <div class="blogs">
            <figure><img src="images/0<?php $randval=rand(1,6); echo $randval; ?>.jpg"></figure>
            <ul>                                          
              <h3><a href="FullArticle.php?Id=<?php echo $row['Id'];?>"><?php echo  $row['title']; ?></a></h3>
  				<p>
				<?php
					
				 echo  substr($row['content'],0,800);?></p>
              <p class="autor"><span class="lm f_l"><a href="/">MyBlog</a></span><span class="dtime f_l"><?php echo $row['DataTime'];?></span>
              <span class="pingl f_r">评论（<a href="FullArticle.php?Id=<?php echo $row['Id'];?>"><?php echo $CommentNum;?></a>）</span></p>
            </ul> 
            </div>
  			<?php }
			mysql_close($conn);
			
		  ?>
              
       
          
        </div>
      </div>
    </div> 

</div>
<br/><br/><br/>
</body>
</html>
