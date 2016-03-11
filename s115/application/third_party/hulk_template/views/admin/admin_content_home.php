<?php /* HULK template engine v0.1
a:2:{s:24:"admin/admin_content_home";i:1454056621;s:21:"admin/admin_base_view";i:1454310044;}
*/ ?>
<?php
/**
 * @Author: itcats
 * @Date:   2016-01-27 20:49:17
 * @Last Modified by:   itcats
 * @Last Modified time: 2016-02-01 15:00:44
 *
 * 管理员后台通用模版
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
  <title>S115后台管理 | Power by itcats</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="<?php echo base_url('static/home/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('static/home/css/AdminLTE.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('static/home/css/skins/skin-blue.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('static/home/css/datatables/dataTables.bootstrap.css') ?>">
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
    <a href="<?php echo site_url('admin') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>115</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>S115</b>管理员后台</span>
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
              <span class="hidden-xs"><?php echo $this->session->userdata('name') ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url('static/login/images/head.png') ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('realname') ?>

                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-6 text-center">
                    <a href=" <?php echo site_url('admin/addadmin') ?>">添加管理员</a>
                  </div>
                  <div class="col-xs-6 text-center">
                    <a href="<?php echo site_url('admin/changepwd') ?>">修改密码</a>
                  </div>
                </div>
                <!-- /.row -->
              <li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo site_url('adminlogin/login_out') ?>" class="btn btn-default btn-flat">退出</a>
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
            <li><a href="<?php echo site_url('admin/addadmin') ?>"><i class="fa  fa-user-plus"></i>添加管理员</a></li>
            <li><a href="<?php echo site_url('admin/changepwd') ?>"><i class="fa  fa-expeditedssl"></i>修改密码</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#"><i class="fa fa-users"></i> <span>用户管理</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('admin/addagent') ?>"><i class="fa fa-user-plus"></i>添加代理商</a></li>
            <li><a href="<?php echo site_url('admin/index') ?>"><i class="fa fa-street-view"></i>待审核用户</a></li>
            <li><a href="<?php echo site_url('admin/checkagent') ?>"><i class="fa fa-list"></i>代理商列表</a></li>
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
        <li><a href="<?php echo site_url('admin') ?>"><i class="fa fa-dashboard"></i>控制面板</a></li>
        <li class="active">待审核用户</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">代理商名下待审核用户</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>用户名[姓名]</th>
                  <th>手机</th>
                  <th>邮箱</th>
                  <th>用户级别</th>
                  <th>注册日期</th>
                  <th>所属代理商</th>
                  <th style="width:110px">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($user as $v):?>
                <tr>
                  <td><?php echo $v['uname']?></td>
                  <td><?php echo $v['mobile']?></td>
                  <td><?php echo $v['email']?></td>
                  <td><?php echo $v['level']?></td>
                  <td><?php echo $v['registertime']?></td>
                  <td><?php echo $v['agentname']?></td>
                  <td>
                      <div class="row">
                        <div class="col-md-6">
                          <form action="<?php echo site_url('admin/getpassuser') ?>" method="POST">
                            <input name="uid" type="hidden" value="<?php echo $v['uid'] ?>"/>
                            <input name="state" type="hidden" value="2"/>
                            <button type="submit" class="btn btn-success">通过</button>
                          </form>
                        </div>

                        <div class="col-md-6">
                          <form action="<?php echo site_url('admin/getnotpassuser') ?>" method="POST">
                            <input name="uid" type="hidden" value="<?php echo $v['uid'] ?>"/>
                            <input name="state" type="hidden" value="3"/>
                            <button type="submit" class="btn btn-danger">驳回</button>
                          </form>
                        </div>
                      </div>
                  </td>
                </tr>
                <?php endforeach;?>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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
  <script src="<?php echo base_url('static/home/js/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('static/home/js/datatables/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('static/home/js/datatables/jquery.slimscroll.min.js') ?>"></script>
<script src="<?php echo base_url('static/home/js/datatables/fastclick.min.js') ?>"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

</body>
</html>