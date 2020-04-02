<?php
	header("Content-Type: text/html;charset=utf-8");
	$conn = mysqli_connect('localhost','root','','fc');
	if($conn){
		if(isset($_POST["submit"])){
			$id=$_POST['id'];
			mysqli_set_charset($conn,'utf8');
			$sql_search="SELECT balance from vip_card_info where id='$id' ";
			$result1=mysqli_query($conn,$sql_search);
			if(mysqli_num_rows($result1)>0){
				while($row=mysqli_fetch_array($result1)){
					$balance=$row['balance'];
				}
			}
			if($balance>0){
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."卡内仍有余额，无法删除！"."\"".")".";"."</script>";
						echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."card2.php"."\""."</script>";
						exit;
			}else{
				$sql_insert = "delete from vip_card_info where id='$id'";
				$result = mysqli_query($conn,$sql_insert);
				if($result==TRUE){
						echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."信息删除成功！"."\"".")".";"."</script>";
						echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."card2.php"."\""."</script>";
						exit;
				}else{
					echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."信息删除失败!"."\"".")".";"."</script>";
					echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."card2.php"."\""."</script>";
					exit;
				}
			}
	
		}
	}else{
		die('Could not connect:'.mysql_error());
	}
?>