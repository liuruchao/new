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
			</div>	
		</header>
		<!-- 内容页面 -->
		<main class="n-main">
			
			<!-- 轮播图 -->
			
			<img src="images/main.jpg">
			
			<div class="n-main-content">
				<h3>公告栏</h3>
				<?php
				if(empty($data)){	
					echo "当前没有信息";
				}else{
					foreach($data as $value){
						?>
						<div class="n-content-box">
							<p class="user">用户名:<span><?php echo $value['name']?></span></p>
							<p class="content"><?php echo $value['content']?></p>
							<p class="time">发布时间：<span><?php echo $value['dateline']?></span></p>
						</div>
						<?php
					}
				}
				?>
			</div>

			

			

		</main>
		<!-- 尾部导航 -->
		<nav class="n-nav">
			<ul>
				<li><a href="html/denglu.html">
					<span></span>
					<p>登陆发布</p>
				</a></li>
				<li><a href="html/zhuce.html">
					<span></span>
					<p align="center">注册</p>
				</a></li>
				<li><a href="html/news.html">
					<span></span>
					<p>长院资讯</p>
				</a></li>
			</ul>
		</nav>
		<img src="images/63b2f6390e554258c7f66c6d94bb9c56.png" id="btn">
	</div>
</body>
</html>


