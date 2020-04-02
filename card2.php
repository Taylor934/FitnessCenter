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
				<h1 class="form-title">删除会员卡信息</h1>
				&nbsp&nbsp&nbsp&nbsp
			<form action="delete_card_info.php" method="POST">
				<div class="form-group">
				<label class="col-sm-2 control-label">会员卡号：</label><input class="form-control required" type="text" placeholder="请输入要删除的会员卡号" id="id" name="id" autofocus="autofocus" maxlength="20" style="width:25%" required="required" />
				</div>
				&nbsp&nbsp&nbsp&nbsp
				<div class="form-group col-md-offset-2"> 
					&nbsp&nbsp&nbsp
                        <button type="submit" class="btn btn-danger pull-center" name="submit">删除</button>
                </div>
			</div>
			</form>
		</div>
	</div>
</body>
</html>