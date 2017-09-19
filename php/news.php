<?php 
require_once('connect.php');
$sql = "select * from article order by id desc";
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
	<title>长院简讯</title>
	<link rel="stylesheet" type="text/css" href="../css/base.css">
	<link rel="stylesheet" type="text/css" href="../css/result.css">
	<script type="text/javascript" src="../js/top.js"></script>
</head>
<body>
	<div class="n-layout">
		<header>
			<h1>长院简讯</h1>
			<a href="../index.php">返回</a>
		</header>
		<main>
			<h3 >资讯内容如下...</h3>
			<div class="n-content-box">
				<?php
				if(empty($data)){	
					echo "当前没有文章，请管理员在后台添加文章";
				}else{
					foreach($data as $value){
						?>
						<a class="post" href="news.show.php?id=<?php echo $value['id']?>">
						<h3 class="title" style="color:#83B42F;font-size: 20px;"><?php echo $value['title']?><!-- 标题 --></h3>
							<div class="entry f_left">
								<!-- 描述 -->
								<?php echo $value['description']?>

							</div>
							<img src="<?php echo $value['picturn']?>" alt="" class="pic f_right">
						<p class="clearfix">&nbsp&nbsp</p>
						</a>
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

		><img src="../images/shuaxin.png"
		class="shuaxin"></a>
		<img src="../images/63b2f6390e554258c7f66c6d94bb9c56.png" id="btn" class="shua">
	</div>
</body>
</html>