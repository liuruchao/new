<?php
	require_once('connect.php');
	//把传递过来的信息入库,在入库之前对所有的信息进行校验。
	
	if(!(isset($_POST['pinglun'])&&(!empty($_POST['pinglun'])))){
		echo "<script>alert('内容不能为空，请重新输入！！');window.location.href='../html/发布.html';</script>";
	}
	$pinglun = $_POST['pinglun'];
	$id=$_POST['id'];
	$qian=$_POST['qian'];
	$insertsql = "UPDATE content SET pinglun='$qian$pinglun' WHERE id=$id" ;
	if(mysql_query($insertsql)){
		echo "<script>alert('评论成功');window.location.href='../index.php';</script>";
	}else{
		echo "<script>alert('评论失败');window.location.href='../index.php';</script>";
	}
?>