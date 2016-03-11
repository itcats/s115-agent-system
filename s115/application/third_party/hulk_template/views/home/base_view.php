<?php /* HULK template engine v0.1
a:1:{s:14:"home/base_view";i:1453124820;}
*/ ?>
<?php
/**
 * @Author: itcats
 * @Date:   2016-01-18 21:40:56
 * @Last Modified by:   itcats
 * @Last Modified time: 2016-01-18 21:46:43
 *
 *后台模版通用模版
 *
 */
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>S115代理商后台管理|Power by itcats</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="<?php echo base_url('static/home/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('static/home/css/AdminLTE.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('static/home/css/skins/skin-blue.min.css') ?>">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/home" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>115</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>S115</b>代理商后台</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">切换导航</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-danger">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">你有4条未读信息</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="<?php echo base_url('static/home/images/user3-128x128.jpg') ?>" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        支持团队
                        <small><i class="fa fa-clock-o"></i> 5 分钟前</small>
                      </h4>
                      <!-- The message -->
                      <p>你对此有什么疑问？</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">查看所有</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo base_url('static/home/images/user3-128x128.jpg') ?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">老王</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url('static/home/images/user3-128x128.jpg') ?>" class="img-circle" alt="User Image">

                <p>
                  老王的个人中心
                  <small>代理商编号：NO.0001</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">个人中心</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">修改头像</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">修改密码</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="/" class="btn btn-default btn-flat">退出</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('static/home/images/user3-128x128.jpg') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>老王</p>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">控制面板</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview">
          <a href="#"><i class="fa fa-user"></i> <span>个人中心</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa  fa-info-circle"></i>个人资料</a></li>
            <li><a href="#"><i class="fa  fa-image"></i>修改头像</a></li>
            <li><a href="/home/changepwd/"><i class="fa  fa-expeditedssl"></i>修改密码</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>用户管理</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-user-plus"></i>添加用户</a></li>
            <li><a href="#"><i class="fa fa-street-view"></i>待审核用户</a></li>
            <li><a href="#"><i class="fa fa-list"></i>用户列表</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa  fa-cogs"></i> <span>服务器管理</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-server"></i>全部服务器</a></li>
            <li><a href="#"><i class="fa fa-warning"></i>即将到期服务器</a></li>
            <li><a href="#"><i class="fa fa-remove"></i>失效期服务器</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-rmb"></i> <span>结算管理</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-clock-o"></i>待结算</a></li>
            <li><a href="#"><i class="fa fa-check-circle-o"></i>已结算</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
 content-wrapper   <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <?php echo date('Y-m-d')?>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <?php echo date('Y')?> 杭州荣辰网络信息科技有限公司</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="<?php echo base_url('static/home/js/jQuery-2.1.4.min.js') ?>"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo base_url('static/home/js/bootstrap.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('static/home/js/app.min.js') ?>"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>