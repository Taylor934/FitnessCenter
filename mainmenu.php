
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

<title>会员功能界面</title>

</head>

<body>
<!--顶部导航栏部分-->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" title="logoTitle" href="mainmenu.php">健身中心会员功能界面</a>
       </div>
       <div class="collapse navbar-collapse">
           <ul class="nav navbar-nav navbar-right">
               <li role="presentation">
                   <a href="#">当前用户：<span class="badge"><?php 
                    header("Content-Type: text/html;charset=utf-8");
                    $conn = mysqli_connect('localhost','root','','fc');
                    if($conn){
                        mysqli_set_charset($conn,'utf8');
                        session_start();
                        $user=$_SESSION['user'];
                        $sql_insert = "SELECT name from vip_basic_info where phone='$user' ";
                        $result = mysqli_query($conn,$sql_insert);
                        if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_array($result))
                            {
                              echo $row['name'];
                              $_SESSION['username']=$row['name'];
                            }
                        }
                        
                    }else{
                      die('Could not connect:'.mysql_error());
                    }
                   ?></span></a>
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
            <li role="presentation">
                 <a href="self_info.php" target="mainFrame">个人信息</a>
             </li>
              <li role="presentation">
                 <a href="buy_lesson.php" target="mainFrame">课程购买</a>
             </li>
              <li role="presentation">
                 <a href="vip_lesson.php" target="mainFrame">您的课程</a>
             </li>
             <li class="dropdown">
                 <a class="dropdown-toggle" data-toggle="dropdown" href="#"  target="mainFrame">
                     您的会员卡<span class="caret"></span>
                 </a>
                 <ul class="dropdown-menu">
                     <li>
                         <a data-stopPropagation="true" href="recharge.php" target="mainFrame">会员卡充值</a>
                     </li>
                     <li>
                         <a data-stopPropagation="true" href="ask_for_leave.php" target="mainFrame">会员请假</a>
                     </li>
                    
                     <li>
                         <a data-stopPropagation="true" href="search_vip_card.php" target="mainFrame">会员卡查询</a>
                     </li>
                 </ul>
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
       <iframe src="welcome1.php" id="mainFrame" name="mainFrame" 
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
</html>