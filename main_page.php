<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>

    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="css/style.css">



</head>
<body>
	<div align="center">
	<img src="./img/head(nobottom).png"/>
    </div>
    <div class="container	">
    	<div class="form row">
            <div class="form-horizontal col-md-offset-2 center" id="login_form">
            	<div class="tabbable">
				  <ul class="nav nav-tabs">
				    <li class="active"><a href="#tab1" data-toggle="tab">我是会员</a></li>
				    <li><a href="#tab2" tabindex="-1" data-toggle="tab">我是教练</a></li>
				    <li><a href="#tab3" tabindex="-1" data-toggle="tab">我是管理员</a></li>
				  </ul>
				  <div class="tab-content">
				    <div class="tab-pane fade in active" id="tab1">
				      <p> <h3 class="form-title">会员登录</h3>
                		 <div class="col-md-9">
                      <form action="login_check.php" method="post">
                    	  <div class="form-group"> 
                         <i class="fa fa-user fa-lg"></i>
                        <input class="form-control required" type="text" placeholder="请输入手机号" id="username" name="username" autofocus="autofocus" maxlength="20"/>
                    	  </div>
                    	  <div class="form-group">
                         <i class="fa fa-lock fa-lg"></i>
                         <input class="form-control required" type="password" placeholder="密码" id="password" name="password" maxlength="8"/>
                    	 </div>
                     	<div class="form-group"> 

                       <label class="checkbox pull-left">
                            <input type="checkbox" name="remember" value="1"/>记住我
                        </label>
                        <label class="checkbox pull-right">
	                        <a onclick="window.location='register.html'">注册新账号</a>
	                    </label>
                        <div class="form-group col-md-offset-9"> 
                        <button type="submit" class="btn btn-success pull-right" name="submit">登录</button>
                    </div>
                    </div> 
                  </form>
                    </div>
                      </p>
				    </div>
				    <div class="tab-pane fade" id="tab2">
				      <p><h3 class="form-title">教练登录</h3>
                		 <div class="col-md-9">
                    	  <div class="form-group"> 
                        <form action="coach_login.php" method="POST">
                         <i class="fa fa-user fa-lg"></i>
                        <input class="form-control required" type="text" placeholder="请输入教练手机号" id="username" name="username" autofocus="autofocus" maxlength="20"/>
                    	  </div>
                    	  <div class="form-group">
                         <i class="fa fa-lock fa-lg"></i>
                         <input class="form-control required" type="password" placeholder="密码" id="password" name="password" maxlength="8"/>
                    	 </div>
                     	<div class="form-group"> 
                       <label class="checkbox pull-left">
                            <input type="checkbox" name="remember" value="1"/>记住我
                        </label>
                        <label class="checkbox pull-right">
	                        <a onclick="window.location='coach_register.php'">注册新账号</a>
	                    </label>	
                        <div class="form-group col-md-offset-9"> 
                        <button type="submit" class="btn btn-success pull-right" name="submit">登录</button>

                    </div>
                     </form>
                    </div> 
                    </div>
                    
                      </p>
				    </div>
				    <div class="tab-pane fade" id="tab3">
				      <p><h3 class="form-title">管理员登录</h3>
                		 <div class="col-md-9">
                    	  <div class="form-group"> 
                          <form action="admin_login.php" method="POST">
                         <i class="fa fa-user fa-lg"></i>
                        <input class="form-control required" type="text" placeholder="请输入后台管理账号" id="username" name="username" autofocus="autofocus" maxlength="20"/>
                    	  </div>
                    	  <div class="form-group">
                         <i class="fa fa-lock fa-lg"></i>
                         <input class="form-control required" type="password" placeholder="密码" id="password" name="password" maxlength="8"/>
                    	 </div>
                     	<div class="form-group"> 
                       <label class="checkbox pull-left">
                            <input type="checkbox" name="remember" value="1"/>记住我
                        </label>
              
                        <div class="form-group col-md-offset-9"> 
                        <button type="submit" class="btn btn-success pull-right" name="submit">登录</button>
                    </div>
                    </div> 
                    </div>
                      </p>
				    </div>
				  </div>
				</div>


                    
                </div>
            </div>
        </div>
      
    </div>
    <script>
    $(function () {
        $('#myTab a:last').tab('show')
    })
</script>
</body>
</html>

<!--   -->