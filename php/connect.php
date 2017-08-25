<?php
   header("Content-type:text/html;charset=utf-8");
   require_once('config.php');
  //连接数据库
  $con=mysql_connect(HOST,USERNAME,PASSWORLD);
  //选择数据库
  mysql_select_db('new');
  //字符集
  mysql_query('set names utf8');
?>