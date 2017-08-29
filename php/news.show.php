<?php 
	require_once('connect.php');
	$id = intval($_GET['id']);
	$sql = "select * from article where id=$id";
	$query = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		$row = mysql_fetch_assoc($query);
	}else{
		echo "这篇文章不存在";
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0">
	<title>长院简讯</title>
	<link rel="stylesheet" type="text/css" href="../css/base.css">
	<link rel="stylesheet" type="text/css" href="../css/news.show.css">
	
</head>
<body>
  <header>
  		<a href="news.php"><</a>
  </header>
  <main>
  	 <h3> <?php echo $row['description']?> </h3>
  	 <img src="<?php echo $row['picturn']?>">
  	 <p> <?php echo $row['content']?> </p>
  </main>
  <footer>
  	<p>客官真的没有了。。</p>
  </footer>
 </body>
 </html>