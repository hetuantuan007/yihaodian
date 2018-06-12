<?php
	header("content-type","text/html;charset=utf-8");
	// 1、接收前端数据
	$stuid = $_POST['stuid'];
	$stuname = $_POST['stuname'];
	$stusex = $_POST['stusex'];
	$stuage = $_POST['stuage'];

	// 2、链接数据库，添加到数据库中
	// (1)、建立链接(数据库、服务器)

	$conn = mysql_connect("localhost","root","root");

	// (2)、选择数据库
	mysql_select_db("mydb1802",$conn);

	// (3)、执行插入语句
	$sqlstr="insert into stuinfo(stuid,stuname,stusex,stuage) values('".$stuid."','".$stuname."','".$stusex."',".$stuage.")";
	mysql_query($sqlstr,$conn);

	// (4)、关闭数据库

	mysql_close($conn);

	//3、响应（告诉前端，保存成功）
	echo "ok";
?>