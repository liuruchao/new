<?php
	require_once('connect.php');
	//把传递过来的信息入库,在入库之前对所有的信息进行校验。
    
    $name = $_POST['name'];
	$number = $_POST['number'];
	$passworld = $_POST['passworld'];
	$strlen1=strlen($number);
	$strlen2=strlen($passworld);
	$insertsql = "insert into users(name, number, passworld) values('$name', '$number', '$passworld')";
	$selectsql="select number from users where number=$number";
	$row=mysql_query($selectsql);
	$rows=mysql_num_rows($row);
   
	if(!(isset($_POST['name'])&&(!empty($_POST['name'])))){
		echo "<script>alert('用户名不能为空，请重新注册！！');window.location.href='../html/zhuce.html';</script>";
	}
	if(!(isset($_POST['number'])&&(!empty($_POST['number'])))){
		echo "<script>alert('学号不能为空，请重新注册！！');window.location.href='../html/zhuce.html';</script>";
	}
	if(!(isset($_POST['passworld'])&&(!empty($_POST['passworld'])))){
		echo "<script>alert('密码不能为空，请重新注册！！');window.location.href='../html/zhuce.html';</script>";
	}
    if ($rows==0 && (!empty($_POST['name'])) && (!empty($_POST['number'])) && (!empty($_POST['passworld']))) {
    	mysql_query($insertsql);
        echo "<script>alert('注册成功，请登陆使用');window.location.href='../html/denglu.html';</script>";
    }else{
		echo "<script>alert('该学号已被注册，注册失败');window.location.href='../html/zhuce.html';</script>";
	}
	
	
?>