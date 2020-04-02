<?php
	header("Content-Type: text/html;charset=utf-8");
	$conn = mysqli_connect('localhost','root','','fc');
	if($conn){
		if(isset($_POST["submit"])){
			$rmb=$_POST['rmb'];
			session_start();
			$user=$_SESSION['user'];
			mysqli_set_charset($conn,'utf8');
			$sql_search="SELECT name from vip_basic_info where phone='$user'";
			$result=mysqli_query($conn,$sql_search);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){
					$username=$row['name'];
				}
			}
			$_SESSION['username']=$username;
			$sql_search="SELECT balance from vip_card_info where belong='$username'";
			$result = mysqli_query($conn,$sql_search);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){
					$new_balance=$row['balance']+$rmb;
				}
			}
			$sql_update="UPDATE vip_card_info SET balance='$new_balance' where belong='$username'";
			$result = mysqli_query($conn,$sql_update);
			$sql_update2="INSERT INTO cost_info(vip_name,cost,beizhu) values('$username','$rmb','充值')";
			$result2 =mysqli_query($conn,$sql_update2);
			if($result==TRUE && $result2==TRUE){
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."充值成功！"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."recharge.php"."\""."</script>";
				exit;
			}else{
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."充值失败!"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."recharge.php"."\""."</script>";
				exit;
			}
	
		}
	}else{
		die('Could not connect:'.mysql_error());
	}
?>