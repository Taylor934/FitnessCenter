<?php
	header("Content-Type: text/html;charset=utf-8");
	//建立连接
	$conn = mysqli_connect('localhost','root','','fc');//连接到数据库
	if($conn){
		//数据库连接成功
		if(isset($_POST["submit"])){
			
			$user = $_POST["username"];
			$pass = $_POST["password"];
			$re_pass = $_POST["re_password"];
			if($user == ""||$pass == ""){
				//用户名or密码为空
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."用户名或密码不能为空！"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."register.html"."\""."</script>";
				exit;
			}
			if($pass == $re_pass){
				//两次密码输入一致
				mysqli_set_charset($conn,'utf8');	//设置编码
				//sql语句
				$sql_select = "SELECT username FROM vip_login_info WHERE username = '$user'";
				//sql语句执行
				$result = mysqli_query($conn,$sql_select);
				//判断用户名是否已存在
				if(mysqli_num_rows($result)>0){
					//用户名已存在
					echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."用户名已存在！"."\"".")".";"."</script>";
					echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."register.html"."\""."</script>";
					exit;
				}else{
					//用户名不存在
					$sql_insert = "insert into vip_login_info(username,password) values('$user','$pass')";
					//插入数据
					$ret = mysqli_query($conn,$sql_insert);
				//	$row = mysqli_fetch_array($ret); 
					//跳转注册成功页面
					header("Location:registersucc.php");
				}
			}else{
				//两次密码输入不一致
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."两次密码输入不一致！"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."register.html"."\""."</script>";
				exit;
			}
		}
		//关闭数据库
		mysqli_close($conn);
	}else{
		//连接错误处理
		die('Could not connect:'.mysql_error());
	}
 
?>