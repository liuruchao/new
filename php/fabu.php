<?php
	require_once('connect.php');
	date_default_timezone_set('Asia/shanghai');
	//把传递过来的信息入库,在入库之前对所有的信息进行校验。
	if(!(isset($_POST['number'])&&(!empty($_POST['number'])))){
		echo "<script>alert('学号不能为空，请重新输入！！');window.location.href='../html/fabu.html';</script>";
	}
	if(!(isset($_POST['content'])&&(!empty($_POST['content'])))){
		echo "<script>alert('内容不能为空，请重新输入！！');window.location.href='../html/发布.html';</script>";
	}
	$number = $_POST['number'];
	$biaoqian = $_POST['biaoqian'];
	$content = $_POST['content'];
	$dateline=date("m-d-D-H:i");

	$strlen1=strlen($number);
	//验证学号
	if ($strlen1!=8) {
		echo "<script>alert('学号错误，请重新输入！！');window.location.href='../html/zhuce.html';</script>";
	
	}
	$insertsql = "insert into content(number, biaoqian, content,dateline) values('$number', '$biaoqian', '$content','$dateline')";
	if(mysql_query($insertsql)){
		echo "<script>alert('发布成功');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	}else{
		echo "<script>alert('发布失败');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	}
?>