<?php
	header("Content-Type: text/html;charset=utf-8");
	$conn = mysqli_connect('localhost','root','','fc');
	if($conn){
		if(isset($_POST["submit"])){
			$content=$_POST['content'];
			mysqli_set_charset($conn,'utf8');
			$sql_insert = "delete from lesson_info where content='$content'";
			$result = mysqli_query($conn,$sql_insert);
			if($result==TRUE){
					echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."信息删除成功！"."\"".")".";"."</script>";
					echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."lesson2.php"."\""."</script>";
					exit;
			}else{
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."信息删除失败!"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."lesson2.php"."\""."</script>";
				exit;
			}
	
		}
	}else{
		die('Could not connect:'.mysql_error());
	}
?>