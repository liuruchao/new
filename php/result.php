<?php 
require_once('connect.php');
$result=$_POST["result"];
$sql = "select distinct name,content,dateline,biaoqian from users,content where content.number=users.number and content.content like '%$result%'order by dateline desc";
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
	<title>搜索结果</title>
	<link rel="stylesheet" type="text/css" href="../css/base.css">
	<link rel="stylesheet" type="text/css" href="../css/result.css">
    <script type="text/javascript" src="../js/top.js"></script>
    
</head>
<body>
	<div class="n-layout">
		<header>
		    <h1>搜索结果</h1>
			<a href="../index.php">返回</a>
		</header>
		<main>
			<h3 style="color:#83B42F">搜索内容如下...</h3>
			<?php
				if(empty($data)){	
					echo "没有找到符合内容";
				}else{
					foreach($data as $value){
						?>
						<div class="n-content-box">
							<p class="user"><img src="../images/katong.jpg"><span><?php echo $value['name']?></span></p>
							<p class="content"><?php echo $value['content']?></p>
							<p class="time"><span><?php echo $value['dateline']?></span></p>
						</div>
						<?php
					}
				}
				?>
		</main>
		<footer>
			<p>客官真的没有了。。</p>
		</footer>
		<a href="javascript:location.reload();"

		><img src="../images/shuaxin.png"
		class="shuaxin"></a>
		<img src="../images/63b2f6390e554258c7f66c6d94bb9c56.png" id="btn">
	</div>
</body>
</html>