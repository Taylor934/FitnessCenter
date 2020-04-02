<?php
	header("Content-Type: text/html;charset=utf-8");
	$conn = mysqli_connect('localhost','root','','fc');
	if($conn){
		if(isset($_POST["submit"])){
			$name=$_POST["name"];
			$id=$_POST["id"];
			$eff_days=$_POST["eff_days"];
			$eff_times=$_POST["eff_times"];
			$price=$_POST["price"];
			$discount=$_POST["discount"];
			$begin_time=$_POST["begin_time"];
			$end_time=$_POST["end_time"];
			$belong=$_POST["belong"];
			$sql_search="SELECT name from vip_basic_info where name='$belong'";
			$result = mysqli_query($conn,$sql_search);
			if($result==FALSE){
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."不存在该会员！"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."card1.php"."\""."</script>";
				exit;
			}
			$sql_check="SELECT id from vip_card_info where id='$id'";
			$result4=mysqli_query($conn,$sql_check);
			if(mysqli_num_rows($result4)>0){
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."会员卡号已存在！"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."card1.php"."\""."</script>";
				exit;
			}
			mysqli_set_charset($conn,'utf8');
			$sql_insert = "INSERT into vip_card_info(id,name,eff_times,eff_days,price,discount,begin_time,end_time,belong) values('$id','$name','$eff_times','$eff_days','$price','$discount','$begin_time','$end_time','$belong')";
			$result = mysqli_query($conn,$sql_insert);
			if($result==TRUE){
					echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."信息上传成功！"."\"".")".";"."</script>";
					echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."card1.php"."\""."</script>";
					exit;
			}else{
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."信息上传失败!"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."card1.php"."\""."</script>";
				exit;
			}
	
		}
	}else{
		die('Could not connect:'.mysql_error());
	}
?>