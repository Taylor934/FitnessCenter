<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>

    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/regpage_style.css">



</head>
<body>
	<div class="container">
    	<div class="form row">
            <div class="form-horizontal col-md-offset-2 center" id="login_form">
				<h3 class="form-title">教练注册</h3>
                <div class="col-md-9">
                	<form action = "coach_register_check.php" method = "post">
                    <div class="form-group"> 

                    <i class="fa fa-user fa-lg"></i>
                    <input class="form-control required" type="text" placeholder="请输入手机号" onkeyup="this.value=this.value.replace(/\D/g,'')" id="username" name="username" autofocus="autofocus" maxlength="11" minlength="11" />
                    </div>
                    <div class="form-group">
                    <i class="fa fa-lock fa-lg"></i>
                    <input class="form-control required" type="password" placeholder="请设置登录密码" id="password" name="password" maxlength="8"/>
                    </div>
                     <div class="form-group">
                    <i class="fa fa-lock fa-lg"></i>
                    <input class="form-control required" type="password" placeholder="请再次输入密码" id="re_password" name="re_password" maxlength="8"/>
                    </div>
					<div class="form-group col-md-offset-9 "> 
                    <button type="submit" class="btn btn-success pull-right btn-ms" name="submit">注册</button>
				    </div>   
				</form>
            	</div>
        	</div>
      
    	</div>
    </div>
</body>
</html>
