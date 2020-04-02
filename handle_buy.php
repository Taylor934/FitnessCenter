<?php
	header("Content-Type: text/html;charset=utf-8");
	$conn = mysqli_connect('localhost','root','','fc');
	if($conn){
		if(isset($_POST["submit"])){
			$content=$_POST['abc'];
			session_start();
			$user=$_SESSION['user'];
			mysqli_set_charset($conn,'utf8');

			$sql_research="SELECT name from vip_basic_info where phone='$user'";
			$result=mysqli_query($conn,$sql_research);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){
					$username=$row['name'];
				}
			}
			$sql_search2="SELECT lesson_content from vip_lesson where vip_name='$username' and lesson_content='$content'";
			$result3=mysqli_query($conn,$sql_search2);
			if(mysqli_num_rows($result3)>0){
				echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."您已购买过该课程，请勿重复购买"."\"".")".";"."</script>";
				echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."buy_lesson.php"."\""."</script>";
				exit;
			}
			$sql_search="SELECT price,time,location,coach from lesson_info where content='$content'";
			$result = mysqli_query($conn,$sql_search);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){
					$price=$row['price'];
					$time=$row['time'];
					$location=$row['location'];
					$coach=$row['coach'];
				}
			}
				$sql_research="SELECT balance,discount from vip_card_info where belong='$username'";
				$result2 = mysqli_query($conn,$sql_research);
				if(mysqli_num_rows($result2)>0){
					while($row=mysqli_fetch_array($result2)){
						$balance=$row['balance'];
						$discount=$row['discount'];
					}
				}
				if($balance>=$price){
					$new_balance=$balance-$price*$discount*0.1;
					$sql_update="UPDATE vip_card_info SET balance='$new_balance' where belong='$username'";
					$result=mysqli_query($conn,$sql_update);
					if($result==TRUE){
						$sql_update="INSERT into vip_lesson(vip_name,lesson_content,lesson_time,lesson_location,lesson_coach) values('$username','$content','$time','$location','$coach')";
						$result1=mysqli_query($conn,$sql_update);
						$real_price=$price*$discount*0.1;
						$sql_update2="INSERT into cost_info(vip_name,cost,beizhu) values('$username','$real_price','买课')";
						$result2=mysqli_query($conn,$sql_update2);
						if($result1==TRUE && $result2==TRUE){
							echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."您已购买成功，请关注课程时间"."\"".")".";"."</script>";
							echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."buy_lesson.php"."\""."</script>";
						exit;
						}else{
							echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."购买失败，请联系管理员确认原因!"."\"".")".";"."</script>";
							echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."buy_lesson.php"."\""."</script>";
							exit;
						}
					}else{
							echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."购买失败，请联系管理员确认原因!"."\"".")".";"."</script>";
							echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."buy_lesson.php"."\""."</script>";
							exit;
						
					}

				}else{
							echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."余额不足!"."\"".")".";"."</script>";
							echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."recharge.php"."\""."</script>";
							exit;
				
			}
		}
	}else{
		die('Could not connect:'.mysql_error());
	}
?>