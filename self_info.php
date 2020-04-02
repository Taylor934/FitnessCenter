<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- 引入样式文件和动态控制 -->
	    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
<body>	
<?php
	header("Content-Type: text/html;charset=utf-8");
	$conn = mysqli_connect('localhost','root','','fc');
	if($conn){
		session_start();
		$user=$_SESSION['user'];
		mysqli_set_charset($conn,'utf8');
		$sql_insert = "SELECT name,sex,address,fitness,IDnumber,phone,reg_time from vip_basic_info where phone='$user'";
		$result = mysqli_query($conn,$sql_insert);
		if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_array($result))
			{		
				echo"<table class='table' style='width:50%'>
					<caption>会员信息</caption>
					<thead>
						<tr>
						<th>1</th>
						<th>2</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>姓名</th>
							<th>".$row['name']."</th>
						</tr>
						<tr>
							<th>性别</th>
							<th>".$row['sex']."</th>
						</tr>
						<tr>
							<th>地址</th>
							<th>".$row['address']."</th>
						</tr>
						<tr>
							<th>健康状况</th>
							<th>".$row['fitness']."</th>
						</tr>
						<tr>
							<th>身份证号</th>
							<th>".$row['IDnumber']."</th>
						</tr>
						<tr>
							<th>电话号码</th>
							<th>".$row['phone']."</th>
						</tr>
						<tr>
							<th>注册时间</th>
							<th>".$row['reg_time']."</th>
						</tr>

					</tbody>
					</table>";
					
			}
			}else{
								//用户名不存在
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."不存在该会员!"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."mainmenu.php"."\""."</script>";
				exit;
			}

	}else{
		die('Could not connect:'.mysql_error());
	}
?>
</body>