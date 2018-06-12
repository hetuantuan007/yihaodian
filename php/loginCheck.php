<?php
	header("Content-type","text/html;charset=utf-8");

	// 1、获取数据
	$name = $_POST['username'];
	$password = $_POST['userpass'];

	// 2、处理|(链接数据库，进行查询)

	// 1）、链接数据库
	$conn = mysql_connect("localhost","root","root");
	// 2)、选择数据库
	mysql_select_db("yihaodian",$conn);

	// 3)、执行SQL语句
	//let sendstr = "username="+$("userid").value+"&&userpass="+$("passid").value;
	$sqlstr="select * from yonghu where name='".$name."' and password='".$password."'";

	$result = mysql_query($sqlstr,$conn);
	if(mysql_num_rows($result)>0){
		$rows = 1;
	}else{
		$rows = 0;
	}

	// 4)、关闭数据库
	mysql_close($conn);

	// 3、响应
	echo $rows;
?>