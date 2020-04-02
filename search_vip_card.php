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
            $sql_search = "SELECT name from vip_basic_info where phone='$user'";
            $result = mysqli_query($conn,$sql_search);
            if(mysqli_num_rows($result)>0){
            	while($row=mysqli_fetch_array($result)){
            		$vip_name=$row['name'];
            	}
            }
            $sql_insert = "SELECT id,name,eff_times,eff_days,price,discount,begin_time,end_time,belong,askforleave,balance from vip_card_info where belong='$vip_name'";
			$result = mysqli_query($conn,$sql_insert);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result))
				{
					//$id=$_SESSION['id'];	
					echo"<table class='table' style='width:50%'>
						<caption>会员卡信息</caption>
						<thead>
							<tr>
							<th>1</th>
							<th>2</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>卡号</th>
								<th><a>".$row['id']."</a></th>
							</tr>
							<tr>
								<th>会员卡名称</th>
								<th>".$row['name']."</th>
							</tr>
							<tr>
								<th>有效的次数</th>
								<th>".$row['eff_times']."</th>
							</tr>
							<tr>
								<th>有效的天数</th>
								<th>".$row['eff_days']."</th>
							</tr>
							<tr>
								<th>售价</th>
								<th>".$row['price']."</th>
							</tr>
							<tr>
								<th>购买时折扣</th>
								<th>".$row['discount']."</th>
							</tr>
							<tr>
								<th>开始时间</th>
								<th>".$row['begin_time']."</th>
							</tr>
							<tr>
								<th>结束时间</th>
								<th>".$row['end_time'],"</th>
							</tr>
							<tr>
								<th>归属者</th>
								<th>".$row['belong'],"</th>
							</tr>
							<tr>
								<th>是否请假</th>
								<th>".$row['askforleave']."</th>
							</tr>
							<tr>
								<th>余额</th>
								<th>".$row['balance']."</th>
							</tr>
						</tbody>
						</table>";
						
				}
			}else{
								//用户名不存在
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."会员未绑卡，请联系管理员绑定会员卡!"."\"".")".";"."</script>";
				
				exit;
			}

	}else{
		die('Could not connect:'.mysql_error());
	}
?>
</body>