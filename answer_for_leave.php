<?php
	header("Content-Type: text/html;charset=utf-8");
	$conn = mysqli_connect('localhost','root','','fc');
	if($conn){
		if(isset($_POST["submit"])){
			mysqli_set_charset($conn,'utf8');
			session_start();
			$username=$_SESSION['username'];
			$user=$_SESSION['user'];
			echo $user;
			echo $username;
			$sql_update="UPDATE vip_card_info SET askforleave='是' where belong='$username'";
			$result = mysqli_query($conn,$sql_update);
			if($result==TRUE){
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."请假成功！"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."ask_for_leave.php"."\""."</script>";
				exit;
			}else{
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."请假失败!"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."ask_for_leave.php"."\""."</script>";
				exit;
			}
	
		}
	}else{
		die('Could not connect:'.mysql_error());
	}
?>