<?php /* HULK template engine v0.1
a:2:{s:21:"home/content_edituser";i:1454681845;s:14:"home/base_view";i:1454672816;}
*/ ?>
<?php
/**
 * @Author: itcats
 * @Date:   2016-01-18 21:40:56
 * @Last Modified by:   遇到
 * @Last Modified time: 2016-02-05 19:46:56
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
  <title>S115代理商后台管理 | Power by itcats</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="<?php echo base_url('static/home/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('static/home/css/AdminLTE.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('static/home/css/skins/skin-blue.min.css') ?>">
   <link rel="stylesheet" href="<?php echo base_url('static/home/css/daterangepicker-bs3.css') ?>">
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
    <a href="<?php echo site_url('home') ?>" class="logo">
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
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $this->session->userdata('agentname') ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url('static/login/images/head.png') ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('agentname') ?>

                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-6 text-center">
                    <a href=" <?php echo site_url('home/perinfo') ?>">个人信息</a>
                  </div>
                  <div class="col-xs-6 text-center">
                    <a href="<?php echo site_url('home/changepwd') ?>">修改密码</a>
                  </div>
                </div>
                <!-- /.row -->
              <li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo site_url('login/login_out') ?>" class="btn btn-default btn-flat">退出</a>
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



      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">控制面板</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview active">
          <a href="#"><i class="fa fa-user"></i> <span>个人中心</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('home/perinfo') ?>"><i class="fa  fa-info-circle"></i>个人信息</a></li>
            <li><a href="<?php echo site_url('home/changepwd') ?>"><i class="fa  fa-expeditedssl"></i>修改密码</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#"><i class="fa fa-users"></i> <span>用户管理</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('home/adduser') ?>"><i class="fa fa-user-plus"></i>添加用户</a></li>
            <li><a href="<?php echo site_url('home/usercheck') ?>"><i class="fa fa-street-view"></i>待审核用户</a></li>
            <li><a href="<?php echo site_url('home/usernotpass') ?>"><i class="fa fa-street-view"></i>审核未通过用户</a></li>
            <li><a href="<?php echo site_url('home/userlist') ?>"><i class="fa fa-list"></i>用户列表</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#"><i class="fa  fa-cogs"></i> <span>服务器管理</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-server"></i>有效服务器</a></li>
            <li><a href="#"><i class="fa fa-warning"></i>即将到期服务器</a></li>
            <li><a href="#"><i class="fa fa-remove"></i>失效期服务器</a></li>
          </ul>
        </li>
        <li class="treeview active">
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
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>

        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('home') ?>"><i class="fa fa-dashboard"></i>控制面板</a></li>
        <li class="active">编辑用户</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="width:50%">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">编辑用户</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo site_url('home/getedituser') ?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">用户名[姓名]</label>
                  <div class="col-sm-4">
                    <input name="uname" type="text" class="form-control" value="<?php echo $user[0]['uname'] ?>">
                    <?php echo form_error('uname')?>
                  </div>
                  <label class="col-sm-2 control-label">手机</label>
                  <div class="col-sm-4">
                    <input name="mobile" type="text" class="form-control" value="<?php echo $user[0]['mobile'] ?>">
                    <?php echo form_error('mobile')?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">邮箱</label>
                  <div class="col-sm-4">
                    <input name="email" type="text" class="form-control" value="<?php echo $user[0]['email'] ?>">
                    <?php echo form_error('email')?>
                  </div>
                  <label class="col-sm-2 control-label">用户级别</label>
                  <div class="col-sm-4">
                   <select class="form-control select2" name="level">
                      <?php foreach($level as $v): ?>
                      <option value="<?php echo $v['lid'] ?>"<?php echo set_select('level', $v['lid']) ?>><?php echo $v['level'] ?></option>
                      <?php endforeach ?>
                   </select>
                    <?php echo form_error('level')?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">注册日期</label>
                  <div class="col-sm-4">
                    <input name="registertime" type="text" class="form-control" id="reservation" value="<?php echo $user[0]['registertime'] ?>">
                    <?php echo form_error('registertime')?>
                    <input name="state" type="hidden" value="1"/>
                    <input name="aid" type="hidden" value="<?php echo $user[0]['aid'] ?>"/>
                    <input name="uid" type="hidden" value="<?php echo $user[0]['uid'] ?>"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-4">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">修改</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
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
  <script src="<?php echo base_url('static/home/js/moment.min.js') ?>"></script>
<script src="<?php echo base_url('static/home/js/daterangepicker.js') ?>"></script>
<script>
  $(function () {
    //Date range picker
    $('#reservation').daterangepicker({
       singleDatePicker: true,         // 是否单日历
      format: 'YYYY-MM-DD',           // 日期格式
    });
  });
</script>
</body>
</html>