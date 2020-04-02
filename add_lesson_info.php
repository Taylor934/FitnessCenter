<?php
	header("Content-Type: text/html;charset=utf-8");
	$conn = mysqli_connect('localhost','root','','fc');
	if($conn){
		if(isset($_POST["submit"])){
			$content=$_POST['content'];
			$time=$_POST['time'];
			$location=$_POST['location'];
			$coach=$_POST['coach'];
			$price=$_POST['price'];
			//echo $name.$sex.$address.$fitness.$IDnumber.$phone.$reg_time;
			mysqli_set_charset($conn,'utf8');
			$sql_insert = "INSERT into lesson_info(content,time,location,coach,price) values('$content','$time','$location','$coach','$price')";
			$result = mysqli_query($conn,$sql_insert);
			if($result==TRUE){
					echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."信息上传成功！"."\"".")".";"."</script>";
					echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."lesson1.php"."\""."</script>";
					exit;
			}else{
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."信息上传失败!"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."lesson1.php"."\""."</script>";
				exit;
			}
	
		}
	}else{
		die('Could not connect:'.mysql_error());
	}
?>