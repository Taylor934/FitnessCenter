<?php
	header("Content-Type: text/html;charset=utf-8");
	//建立连接
	$conn = mysqli_connect('localhost','root','','fc');//连接到数据库
	if($conn){
		//数据库连接成功
		if(isset($_POST["submit"])){
			
			$user = $_POST["username"];
			$pass = $_POST["password"];
			if($user == ""||$pass == ""){
				//用户名or密码为空
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."用户名或密码不能为空！"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."main_page.php"."\""."</script>";
				exit;
			}
			mysqli_set_charset($conn,'utf8');	//设置编码
			//sql语句
			session_start();
			$sql_select = "SELECT username,password FROM coach_login_info WHERE username = '$user'";
			//sql语句执行
			$result = mysqli_query($conn,$sql_select);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result))
				{
					if($row['password']===$pass){
						$_SESSION['telephone']=$row['username'];
						header("Location:coach_mainmenu.php");

					}
					else{
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."密码错误!"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."main_page.php"."\""."</script>";
				exit;
					}
				}
			}else{
								//用户名不存在
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."用户名不存在!"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."main_page.php"."\""."</script>";
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