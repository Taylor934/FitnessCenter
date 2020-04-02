<?php
	header("Content-Type: text/html;charset=utf-8");
	$conn = mysqli_connect('localhost','root','','fc');
	if($conn){
		if(isset($_POST["submit"])){
			$name=$_POST["name"];
			$sex=$_POST["sex"];
			$address=$_POST["address"];
			$fitness=$_POST["fitness"];
			$IDnumber=$_POST["IDnumber"];
			$phone=$_POST["phone"];
			$reg_time=$_POST["reg_time"];
			if(strlen($IDnumber)==18){
				mysqli_set_charset($conn,'utf8');
				$sql_insert = "INSERT into vip_basic_info(name,sex,address,fitness,IDnumber,phone,reg_time) values('$name','$sex','$address','$fitness','$IDnumber','$phone','$reg_time')";
				$result = mysqli_query($conn,$sql_insert);
				if($result==TRUE){
					echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."信息上传成功！"."\"".")".";"."</script>";
					echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."nav1.php"."\""."</script>";
					exit;
				}else{
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."信息上传失败!"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."nav1.php"."\""."</script>";
				exit;
				}
			//echo $name.$sex.$address.$fitness.$IDnumber.$phone.$reg_time;
			}else{
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."身份证号输入错误!"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."nav1.php"."\""."</script>";
				exit;
			}
	
		}
	}else{
		die('Could not connect:'.mysql_error());
	}
	
?>