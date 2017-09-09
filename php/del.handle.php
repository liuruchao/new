<?php
	require_once('connect.php');
	$id = $_GET['id'];
	$sql="select number from content where id=$id";
	$query=mysql_query($sql);
	$rows=mysql_fetch_assoc($query);
	$deletesql = "delete from content where id=$id";
	if(mysql_query($deletesql)){
		echo "<script>alert('删除成功');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	}else{
		echo "<script>alert('删除失败');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	}
?>