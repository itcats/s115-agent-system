<# extends home/base_view #>
<?php
/**
 * @Author: itcats
 * @Date:   2016-01-17 16:58:37
 * @Last Modified by:   itcats
 * @Last Modified time: 2016-01-25 15:41:09
 *
 * 主体主页部分
 *
 */
?>
<# block content-wrapper #>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        个人主页
        <small>概况</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('home') ?>"><i class="fa fa-dashboard"></i>控制面板</a></li>
        <li class="active">概况</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">用户管理</span>
                <div><a href="<?php echo site_url('home/adduser') ?>" class="text-aqua"><i class="fa fa-user-plus text-aqua"></i>添加用户</a></div>
                <div><a href="<?php echo site_url('home/usercheck') ?>" class="text-aqua"><i class="fa fa-street-view text-aqua"></i>待审核用户</a></div>
                <div><a href="<?php echo site_url('home/userlist') ?>" class="text-aqua"><i class="fa fa-list text-aqua"></i>用户列表</a></div>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-server"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">服务器管理</span>
                <div><a href="<?php echo site_url('home/adduser') ?>" class="text-green"><i class="fa fa-server text-green"></i>有效服务器</a></div>
                <div><a href="<?php echo site_url('home/usercheck') ?>" class="text-green"><i class="fa fa-remove text-green"></i>失效服务器</a></div>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-warning"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">即将到期服务器</span>
                <div><a href="<?php echo site_url('home/adduser') ?>" class="text-yellow"><i class="fa fa-warning text-yellow"></i>续费服务器列表</a></div>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa  fa-rmb"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">结算管理</span>
                <div><a href="<?php echo site_url('home/adduser') ?>" class="text-red"><i class="fa fa-clock-o text-red"></i>待结算列表</a></div>
                <div><a href="<?php echo site_url('home/usercheck') ?>" class="text-red"><i class="fa fa-check-circle-o text-red"></i>已结算列表</a></div>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<# /block #>