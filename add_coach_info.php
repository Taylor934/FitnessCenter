<?php
	header("Content-Type: text/html;charset=utf-8");
	$conn = mysqli_connect('localhost','root','','fc');
	if($conn){
		if(isset($_POST["submit"])){
			$name=$_POST["name"];
			$sex=$_POST["sex"];
			$IDnumber=$_POST["IDnumber"];
			$nation=$_POST["nation"];
			$p_status=$_POST["p_status"];
			$education=$_POST["education"];
			$phone=$_POST["phone"];
			$position=$_POST["position"];
			$graduate=$_POST["graduate"];
			$addition=$_POST["addition"];
			//echo $name.$sex.$address.$fitness.$IDnumber.$phone.$reg_time;
			mysqli_set_charset($conn,'utf8');
			if(strlen($IDnumber)==18){
				$sql_insert = "INSERT into coach_basic_info(name,sex,IDnumber,nation,p_status,education,phone,position,graduate,addition) values('$name','$sex','$IDnumber','$nation','$p_status','$education','$phone','$position','$graduate','$addition')";
				$result = mysqli_query($conn,$sql_insert);
				if($result==TRUE){
						echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."信息上传成功！"."\"".")".";"."</script>";
						echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."coach1.php"."\""."</script>";
						exit;
				}else{
					echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."信息上传失败!"."\"".")".";"."</script>";
					echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."coach1.php"."\""."</script>";
					exit;
				}
			}else{
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."身份证号输入错误!"."\"".")".";"."</script>";
					echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."coach1.php"."\""."</script>";
					exit;
			}
	
		}
	}else{
		die('Could not connect:'.mysql_error());
	}
?>