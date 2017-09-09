<?php
  require_once('connect.php');
  $number=$_POST["number"];
  $passworld=$_POST["passworld"];
  $selectsql="select * from users where number=$number and passworld='$passworld'";
  $query=mysql_query($selectsql);
  if($query&&mysql_num_rows($query)){
   
       echo "<script>alert('登陆成功，欢迎进入！！');window.location.href='person.php?number=$number';</script>";
    
  }else{
    echo "<script>alert('用户密码错误，请重新输入！！');window.location.href='../html/denglu.html';</script>";
  }
?>