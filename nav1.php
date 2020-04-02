<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- 引入样式文件和动态控制 -->
	    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
			<div class="form-row">
				<h1 class="form-title">添加会员信息</h1>
				&nbsp&nbsp&nbsp&nbsp
			<form action="add_vip_info.php" method="POST">
				<div class="form-group">
				<label class="col-sm-2 control-label">姓名：</label><input class="form-control required" type="text" placeholder="请输入会员姓名" id="name" name="name" autofocus="autofocus" maxlength="20" style="width:25%" required="required" />
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">性别：</label><select class="form-control required" style="width:25%"name='sex' data-live-search='true' title='请选择' data-style='btn-primary'>
							<option></option>
						    <option value='男'>男</option>
						    <option value='女'>女</option>
 
							</select>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">家庭住址：</label><input class="form-control required" type="text" placeholder="请输入会员家庭住址" id="address" name="address" autofocus="autofocus" maxlength="20" style="width:25%" required="required"/>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">身体状况：</label><input class="form-control required" type="text" placeholder="健康/生病" id="fitness" name="fitness" autofocus="autofocus" maxlength="20" style="width:25%" required="required"/>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">身份证号：</label><input class="form-control required" type="text" placeholder="请填写18位身份证号" id="IDnumber" name="IDnumber" autofocus="autofocus" maxlength="20" style="width:25%" required="required"/>         
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">手机号码：</label><input class="form-control required" type="text" placeholder="请输入会员手机号码" id="phone" name="phone" autofocus="autofocus" maxlength="20" style="width:25%" required="required"/>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">登记时间：</label><input class="form-control required" type="date" placeholder="请输入会员登记时间" id="reg_time" name="reg_time" autofocus="autofocus" maxlength="20" style="width:25%" required="required"/>
				&nbsp&nbsp&nbsp&nbsp
				<div class="form-group col-md-offset-2"> 
					&nbsp&nbsp&nbsp
                        <button type="submit" class="btn btn-success pull-center" name="submit">提交</button>
                </div>
			</div>
			</form>
		</div>
	</div>
</body>
</html>
