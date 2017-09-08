<?php 
require_once('php/connect.php');
$sql = "select distinct name,content,dateline,biaoqian from users,content where content.number=users.number order by dateline desc";
$query = mysql_query($sql);
if($query&&mysql_num_rows($query)){
	while($row = mysql_fetch_assoc($query)){
		$data[] = $row;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0">
	<title>长院信息公布平台</title>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 
 
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
 
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script type="text/javascript"  src="js/top.js"></script>
	
</head>
<body>
	<!-- 主体 -->
	<div class="n-jayout">
		<!-- 搜索头部 -->
		<header class="n-header">
			<div class="n-header-box">
				<a href="#" class="n-logo"><img src="images/logo.png"></a>
				<!-- 小键盘的enter改变成搜索按钮 -->
				<form method="post" action="php/result.php">
					<img src="images/sousuo.png" class="search">
					<input type="search"
					placeholder="搜索" name="result">
				</form>
				<a href="html/denglu.html" class="n-zhuce "><span class="glyphicon glyphicon-log-in btn-lg"></span>登陆</a>
			</div>	
		</header>
		
		<!-- 内容页面 -->
		<main class="n-main">
			
			<!-- 轮播图 -->
			<div id="myCarousel" class="carousel slide lunbo">
	<!-- 轮播（Carousel）指标 -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>   
	<!-- 轮播（Carousel）项目 -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="images/tu2.jpg" alt="First slide">
		</div>
		<div class="item">
			<img src="images/tu3.jpg" alt="Second slide">
		</div>
		<div class="item">
			<img src="images/tu1.jpg" alt="Third slide">
		</div>
	</div>
	<!-- 轮播（Carousel）导航 -->
	<a class="carousel-control left" href="#myCarousel" 
	   data-slide="prev">&lsaquo;</a>
	<a class="carousel-control right" href="#myCarousel" 
	   data-slide="next">&rsaquo;</a>
</div> 
		<!-- 导航 -->
		<nav class="n-nav">
			<ol class="breadcrumb n-nav-i">
	          <li><a href="php/news.php"
	          style="font-size: 18px">长院简讯</a></li>
	          <li><a href="http://m.baidu.com"
	          style="font-size: 18px">度娘</a></li>
	          <li class="active">公告栏</li>
            </ol>
				
				
				
		</nav>	
		<!-- 发布内容 -->	
			<div class="n-main-content">
				
				<?php
				if(empty($data)){	
					echo "当前没有信息";
				}else{
					foreach($data as $value){
						?>
						<div class="n-content-box">
							<p class="user"><img src="images/katong.jpg"><span><?php echo $value['name']?></span>
							<span style="float: right;font-size: 12px;color:#48A3EE"><?php echo $value['biaoqian']?></span></p>
							<p class="content"><?php echo $value['content']?></p>
							<p class="time"><span><?php echo $value['dateline']?></span></p>
						</div>
						<?php
					}
				}
				?>
			</div>

			

			

		</main>
		<footer>
		    <p>客官真的没有了。。</p>
		</footer>
		<a href="javascript:location.reload();"

		><img src="images/shuaxin.png"
		class="shuaxin"></a>
		<img src="images/63b2f6390e554258c7f66c6d94bb9c56.png" id="btn">
	</div>
</body>
</html>


