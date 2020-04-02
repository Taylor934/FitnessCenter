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
		$count=0;
		$lesson_cost=0;
		$recharge_cost=0;
		$all=0;
		$sql_insert = "SELECT * from cost_info";
		$result = mysqli_query($conn,$sql_insert);
		if(mysqli_num_rows($result)>0){
			echo"<table class='table' style='width:100%'>
			<caption>所有消费记录</caption>
			<thead>
				<tr>
				<th>编号</th>
				<th>会员名</th>
				<th>消费金额</th><th>消费时间</th><th>消费类型</th>
				</tr>
			</thead>";
			while($row=mysqli_fetch_array($result))
			{
				echo"<tbody>
						<tr>
							<th>".$row['Id']."</th>
							<th>".$row['vip_name']."</th>
							<th>".$row['cost']."</th>
							<th>".$row['time']."</th>
							<th>".$row['beizhu']."</th>
						</tr>
					</tbody>";
					if($row['beizhu']=='充值'){
						$recharge_cost=$recharge_cost+$row['cost'];
					}
					if($row['beizhu']=='买课'){
						$lesson_cost=$lesson_cost+$row['cost'];
					}
					$all=$all+$row['cost'];
					$count=$count+1;
			}
			echo"</table>";
			echo"<label>总消费次数：</label>".$count."<br><label>购课消费总额：</label>".$lesson_cost."<br><label>充值消费总额：</label>".$recharge_cost;
		}else{
							//用户名不存在
			echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."没有任何消费记录!"."\"".")".";"."</script>";
			
			exit;
		}
			
	
		}
	
	?>
</body>