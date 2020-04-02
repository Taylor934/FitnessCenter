<?php
	$conn=mysqli_connect('localhost','root','','fc');
	if($conn){
		mysqli_set_charset($conn,'utf8');
		session_start();
		$username=$_SESSION['username'];
		$sql_search="UPDATE vip_card_info SET eff_times=eff_times-1 where belong='$username'";
		$result=mysqli_query($conn,$sql_search);
		if($result==TRUE){
			echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."打卡成功!"."\"".")".";"."</script>";
							echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."search_vip_card.php"."\""."</script>";
							exit;
		}
	}
?>