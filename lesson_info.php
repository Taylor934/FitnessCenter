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
		mysqli_set_charset($conn,'utf8');
		session_start();
		$name=$_SESSION['coachname'];
		$sql_search="SELECT content from lesson_info where coach='$name'";
		$count=0;
		$result = mysqli_query($conn,$sql_search);
		if(mysqli_num_rows($result)>0){
			echo"<table class='table' style='width:100%'>
			<caption>课程信息</caption>
			<thead>
				<tr>
				<th>内容</th>
				<th>时间</th>
				<th>地点</th><th>教练</th><th>价格</th>
				</tr>
			</thead>";
			while($row=mysqli_fetch_array($result)){
				if($count==1){
					break;
				}
				$content=$row['content'];
				$sql_insert = "SELECT * from lesson_info where content='$content'";
				$result1 = mysqli_query($conn,$sql_insert);
				if(mysqli_num_rows($result1)>0){
					while($row=mysqli_fetch_array($result1)){
					echo"<tbody>
						<tr>
							<th>".$row['content']."</th>
							<th>".$row['time']."</th>
							<th>".$row['location']."</th>
							<th>".$row['coach']."</th>
							<th>".$row['price']."</th>
						</tr>
					</tbody>";
					$count=$count+1;
					}
					echo"</table>";
				}
				
			}
		}else{
							//用户名不存在
			echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."数据库为空!"."\"".")".";"."</script>";
			
			exit;
		}
			
	
		}
	
	?>
</body>