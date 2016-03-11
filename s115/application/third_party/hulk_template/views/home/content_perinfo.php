<?php /* HULK template engine v0.1
a:2:{s:20:"home/content_perinfo";i:1454035483;s:14:"home/base_view";i:1454672816;}
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
        <li class="active">个人信息</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">基本信息</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword2" class="col-sm-2 control-label">代理商名称</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('agentname') ?>" disabled>
                  </div>
                  <label for="inputPassword1" class="col-sm-2 control-label">代理商地址</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('address') ?>" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword1" class="col-sm-2 control-label">负责人</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('manager') ?>" disabled>
                  </div>
                  <label for="inputPassword2" class="col-sm-2 control-label">负责人身份证</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('identity') ?>" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-4">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">合作信息</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword1" class="col-sm-2 control-label">代理商折扣</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('discount') ?>" disabled>
                  </div>
                  <label for="inputPassword2" class="col-sm-2 control-label">代理商性质</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('nature') ?>" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword1" class="col-sm-2 control-label">加盟时间</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('jointime') ?>" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-4">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">联系方式</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword1" class="col-sm-2 control-label">QQ</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('qq') ?>" disabled>
                  </div>
                  <label for="inputPassword2" class="col-sm-2 control-label">手机</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('phone') ?>" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword1" class="col-sm-2 control-label">微信</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('wechat') ?>" disabled>
                  </div>
                  <label for="inputPassword2" class="col-sm-2 control-label">邮箱</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('email') ?>" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-4">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">结款方式</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword1" class="col-sm-2 control-label">支付宝账户名</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('alipayname') ?>" disabled>
                  </div>
                  <label for="inputPassword2" class="col-sm-2 control-label">支付宝账号</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('alipay') ?>" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword1" class="col-sm-2 control-label">开户银行</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('bank') ?>" disabled>
                  </div>
                  <label for="inputPassword2" class="col-sm-2 control-label">开户名</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('cardholder') ?>" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword1" class="col-sm-2 control-label">银行卡号</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?php echo $this->session->userdata('bankcard') ?>" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-4">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
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
  </body>
</html>