
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- 引入样式文件和动态控制 -->
    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--主要样式控制-->
        <link href="css/admin.css" rel="stylesheet"/>

<title>后台管理界面</title>

</head>
<body>
<!--顶部导航栏部分-->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" title="logoTitle" href="admin.php">健身中心管理系统</a>
       </div>
       <div class="collapse navbar-collapse">
           <ul class="nav navbar-nav navbar-right">
               <li role="presentation">
                   <a href="#">当前用户：<span class="badge">管理员</span></a>
               </li>
               <li>
                   <a href="main_page.php">
                         <span class="glyphicon glyphicon-lock"></span>退出登录</a>
                </li>
            </ul>
       </div>
    </div>      
</nav>

<!-- 中间主体内容部分 -->
<div class="pageContainer">
     <!-- 左侧导航栏 -->
     <div class="pageSidebar">
         <ul class="nav nav-stacked nav-pills">
             <li class="dropdown">
                 <a class="dropdown-toggle" data-toggle="dropdown" href="#"  target="mainFrame">
                     会员信息管理<span class="caret"></span>
                 </a>
                 <ul class="dropdown-menu">
                     <li>
                         <a data-stopPropagation="true" href="nav1.php" target="mainFrame">添加会员信息</a>
                     </li>
                     <li>
                         <a data-stopPropagation="true" href="nav2.php" target="mainFrame">删除会员信息</a>
                     </li>
                     <li>
                         <a data-stopPropagation="true" href="nav3.php" target="mainFrame">更改会员信息</a>
                     </li>
                     <li>
                         <a data-stopPropagation="true" href="nav4.php" target="mainFrame">查看会员信息</a>
                     </li>
                 </ul>
             </li>
             <li class="dropdown">
                 <a class="dropdown-toggle" data-toggle="dropdown" href="#" target="mainFrame">会员卡信息管理<span class="caret"></span></a>
                 <ul class="dropdown-menu">
                    <li>
                        <a data-stopPropagation="true" href="card1.php" target="mainFrame">添加会员卡信息</a>
                    </li>
                    <li>
                        <a data-stopPropagation="true" href="card2.php" target="mainFrame">删除会员卡信息</a>
                    </li>
                    <li>
                        <a data-stopPropagation="true" href="card3.php" target="mainFrame">更改会员卡信息</a>
                    </li>
                    <li>
                        <a data-stopPropagation="true" href="card4.php" target="mainFrame">查看会员卡信息</a>
                    </li>
                </ul>
             </li>
             <li class="dropdown">
                 <a class="dropdown-toggle" data-toggle="dropdown" href="#" target="mainFrame">教练信息管理<span class="caret"></span></a>
                 <ul class="dropdown-menu">
                    <li>
                        <a data-stopPropagation="true" href="coach1.php" target="mainFrame">添加教练信息</a>
                    </li>
                    <li>
                        <a data-stopPropagation="true" href="coach2.php" target="mainFrame">删除教练信息</a>
                    </li>
                    <li>
                        <a data-stopPropagation="true" href="coach3.php" target="mainFrame">更改教练信息</a>
                    </li>
                    <li>
                        <a data-stopPropagation="true" href="coach4.php" target="mainFrame">查看教练信息</a>
                    </li>
                </ul>
             </li>
            <li class="dropdown">
                 <a class="dropdown-toggle" data-toggle="dropdown" href="#" target="mainFrame">课程信息管理<span class="caret"></span></a>
                 <ul class="dropdown-menu">
                    <li>
                        <a data-stopPropagation="true" href="lesson1.php" target="mainFrame">添加课程信息</a>
                    </li>
                    <li>
                        <a data-stopPropagation="true" href="lesson2.php" target="mainFrame">删除课程信息</a>
                    </li>
                    <li>
                        <a data-stopPropagation="true" href="lesson3.php" target="mainFrame">更改课程信息</a>
                    </li>
                    <li>
                        <a data-stopPropagation="true" href="lesson4.php" target="mainFrame">查看课程信息</a>
                    </li>
                </ul>
             </li>
             <li class="dropdown">
                <a data-stopPropagation="true" href="cost_record.php" target="mainFrame">查看消费记录</a>
             </li>
             <!-- 结束 -->
             <li role="presentation">
                 <a href="main_page.php">退出系统</a>
             </li>



         </ul>
     </div>

      <!-- 左侧导航和正文内容的分隔线 -->
     <div class="splitter"></div>
     <!-- 正文内容部分 -->
     <div class="pageContent">
       <iframe src="welcome.php" id="mainFrame" name="mainFrame" 
       frameborder="0" width="100%"  height="100%" frameBorder="0">
       </iframe> 
     </div>

 </div>
  <!-- 底部页脚部分 -->
 <div class="footer">
     <p class="text-center">
          &copy; 周乐凯.
     </p>
 </div>

 <script type="text/javascript">
 $(".nav li").click(function() {
        $(".active").removeClass('active');
        $(this).addClass("active");
    }); 
$(".dropdown-menu").on("click",function (e) {
  e.stopPropagation();
})

 </script>
</body>
</html>x