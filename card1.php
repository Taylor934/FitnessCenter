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
			<div class="form-group">
				<h1 class="form-title">添加会员卡信息</h1>
				&nbsp&nbsp&nbsp&nbsp
			<form action="add_card_info.php" method="POST">
				<div class="form-group">
				<label class="col-sm-2 control-label">会员卡编号：</label><input class="form-control required" type="text" placeholder="请输入会员卡编号" id="id" name="id" autofocus="autofocus" maxlength="20" style="width:25%" required="required" />
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">会员卡名称：</label><input class="form-control required" type="text" placeholder="请输入会员卡名称" id="name" name="name" autofocus="autofocus" maxlength="20" style="width:25%" required="required"/>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">有效天数：</label><input class="form-control required" type="text" placeholder="请输入有效天数" id="eff_days" name="eff_days" autofocus="autofocus" maxlength="20" style="width:25%"/>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">有效次数：</label><input class="form-control required" type="text" placeholder="请输入有效次数" id="eff_times" name="eff_times" autofocus="autofocus" maxlength="20" style="width:25%"/>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">会员卡售价：</label><input class="form-control required" type="text" placeholder="请输入该卡售价" id="price" name="price" autofocus="autofocus" maxlength="20" style="width:25%" required="required"/>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">会员卡折扣：</label><input class="form-control required" type="text" placeholder="请输入该卡消费时折扣" id="discount" name="discount" autofocus="autofocus" maxlength="20" style="width:25%"/>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">开始使用时间：</label><input class="form-control required" type="date" placeholder="请输入该卡使用的开始时间" id="begin_time" name="begin_time" autofocus="autofocus" maxlength="20" style="width:25%"/>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">结束使用时间：</label><input class="form-control required" type="date" placeholder="请输入该卡使用的结束时间" id="end_time" name="end_time" autofocus="autofocus" maxlength="20" style="width:25%"/>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">会员卡归属用户：</label><input class="form-control required" type="text" placeholder="请输入会员卡归属用户姓名" id="belong" name="belong" autofocus="autofocus" maxlength="20" style="width:25%"/>
				</div>
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