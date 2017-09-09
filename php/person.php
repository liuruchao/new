 <?php 
require_once('connect.php');
$number=$_GET["number"];
$sql = "select distinct content.id,name,content,dateline,biaoqian from users,content where users.number=$number  and content.number=users.number order by dateline desc";
$query = mysql_query($sql);
if($query&&mysql_num_rows($query)){
	while($row = mysql_fetch_assoc($query)){
		$data[] = $row;
	}
}
$sql1="select distinct name from users where number=$number ";
$query1=mysql_query($sql1);
$row1=mysql_fetch_assoc($query1);
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0">
	<title>个人中心</title>
	<link rel="stylesheet" type="text/css" href="../css/base.css">
	<link rel="stylesheet" type="text/css" href="../css/person.css">
</head>
<body>
 <div class="n-layout">
    <!-- 上部 -->
     <div class="top">
     	 <div class="tou">
     	 	<img src="../images/katong.jpg" alt="">
     	 	<h2><?php echo $row1['name']?></h2>
     	 </div>
     </div>
    <!-- 下部 -->
     <div class="btm">
     	<h3>历史信息...</h3>
     	<?php
				if(empty($data)){	
					echo "快来发布你的信息吧";
				}else{
					foreach($data as $value){
						?>
     	<div class="n-content-box">
							<p class="time"><span><?php echo $value['dateline']?></span></p>
							<span style="float: right;font-size: 12px;color:#48A3EE"><?php echo $value['biaoqian']?></span></p>
							<p class="content"><?php echo $value['content']?></p>
							<a href="del.handle.php?id=<?php echo $value['id']?>" class="delet">删除</a>
		</div>
		<?php
					}
				}
				?>
		
		
		<a href="../html/fabu.html" class="left sub">发布消息</a>
		<a href="../index.php" class="right sub">退出登陆</a>
     </div>
 </div>	
</body>
</html>