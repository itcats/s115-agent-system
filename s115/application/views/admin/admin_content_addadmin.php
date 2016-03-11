<# extends admin/admin_base_view #>
<?php
/**
 * @Author: itcats
 * @Date:   2016-01-19 10:16:54
 * @Last Modified by:   itcats
 * @Last Modified time: 2016-01-29 10:11:14
 *
 *添加管理员
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
        <li class="active">添加管理员</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="width:50%">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">添加管理员</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo site_url('admin/getaddadmin') ?>" method="POST">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">用户名</label>
                  <div class="col-sm-4">
                    <input name="name" type="text" class="form-control" placeholder="建议使用字母数字组合">
                  </div>
                  <label class="col-sm-2 control-label">密码</label>
                  <div class="col-sm-4">
                    <input name="password" type="text" class="form-control" placeholder="密码">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">真实姓名</label>
                  <div class="col-sm-4">
                    <input name="realname" type="text" class="form-control" placeholder="管理员真实姓名">
                    <input name="state" type="hidden" value="0"/>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">新增</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<# /block #>