<?php 
require_once('../php/connect.php');
$number=$_GET["number"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0">
	<title>发布信息</title>
	<link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/zhuce.css">
</head>
<body>
  <div class="n-layout">
   <div class="n-layout-c">
    <div class="n-layout-l">
     <a href="../index.php" class="fanhui"><img src="../images/fanhui.jpg"></a>
     <h1 class="h1-1">L</h1>
     <h1 class="h1-2">发布信息</h1>
	
	<form method="post" action="../php/fabu.php">
		
				
				<input type="text" name="number" value="<?php echo $number?>" readonly="readonly">
                <div class="ex">
                 <h4>信息标签：</h4>
				<select name="biaoqian">
					<option value="失物招领">失物招领</option>
					<option value="二手出售">二手出售</option>
					<option value="广告发布">广告发布</option>
				</select>
                </div>
                <div class="ex">
				<h4>内容：</h4>
				<textarea name="content"></textarea>
			    </div>
			
				
				
			
		
		<input type="submit" value="提交" class="sub">
		
	</form>
	</div>
   </div>
  </div>	
</body>
</html>
			
