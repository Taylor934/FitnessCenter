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
		mysqli_set_charset($conn,'utf8');
		$sql_insert = "SELECT content,time,location,coach,price from lesson_info";
		$result = mysqli_query($conn,$sql_insert);
		if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_array($result))
			{
				echo"<table class='table' style='width:100%'>
				<caption>课程信息</caption>
				<thead>
					<tr>
					<th>内容</th>
					<th>时间</th>
					<th>地点</th><th>教练</th><th>价格</th>
					</tr>
				</thead>";
				echo"<tbody>
							<tr>
								<th>".$row['content']."</th>
								<th>".$row['time']."</th>
								<th>".$row['location']."</th>
								<th>".$row['coach']."</th>
								<th>".$row['price']."</th>
							</tr>
						</tbody>";
				echo"</table>";
				echo"<div class='form-group'>
							<div class='col-sm-6' >
							<label for='type' class='col-lg-2 control-label'>请选择您要购买的课程</label>	
							<form action='handle_buy.php' method='POST'>
							<select class='selectpicker show-tick form-control' name='abc' data-live-search='true' title='请选择' data-style='btn-primary'  style='width:100px'>
							<option></option>
						    <option value='".$row['content']."'>".$row['content']."</option>
							</select>
							<button type='submit' class='btn btn-success pull-right' name='submit'>购买</button>
							</form>
							</div>
							</div>";
			}
		}else{
							//用户名不存在
			echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."无可选课程!"."\"".")".";"."</script>";
			echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."buy_lesson.php"."\""."</script>";
			exit;
		}

	}else{
		die('Could not connect:'.mysql_error());
	}
?>
</body>