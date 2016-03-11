<# extends admin/admin_base_view #>
<?php
/**
 * @Author: itcats
 * @Date:   2016-01-28 15:23:24
 * @Last Modified by:   itcats
 * @Last Modified time: 2016-01-28 15:46:06
 *
 *管理员修改个人密码
 *
 */
?>
<# block content-wrapper #>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>

        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin') ?>"><i class="fa fa-dashboard"></i>控制面板</a></li>
        <li class="active">修改密码</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content " style="width:50%">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">修改密码</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo site_url('admin/getchangepwd') ?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword1" class="col-sm-2 control-label">原密码</label>

                  <div class="col-sm-10">
                    <input type="password" name="passwd" class="form-control" id="inputPassword1" placeholder="请输入原密码">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword2" class="col-sm-2 control-label">新密码</label>

                  <div class="col-sm-10">
                    <input type="password" name="passwdF" class="form-control" id="inputPassword2" placeholder="请输入新密码">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">再次输入</label>

                  <div class="col-sm-10">
                    <input type="password" name="passwdS" class="form-control" id="inputPassword3" placeholder="请再次输入新密码">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
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
<# /block #>