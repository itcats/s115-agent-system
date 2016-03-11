<# extends home/base_view #>
<?php
/**
 * @Author: itcats
 * @Date:   2016-01-19 10:16:54
 * @Last Modified by:   itcats
 * @Last Modified time: 2016-01-23 02:43:39
 *
 *代理商添加用户
 *
 */
?>

<# block datatables #>
 <link rel="stylesheet" href="<?php echo base_url('static/home/css/daterangepicker-bs3.css') ?>">
<# /block #>

<# block content-wrapper #>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>

        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('home') ?>"><i class="fa fa-dashboard"></i>控制面板</a></li>
        <li class="active">添加用户</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="width:50%">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">添加用户</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo site_url('home/getadduser') ?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">用户名[姓名]</label>
                  <div class="col-sm-4">
                    <input name="uname" type="text" class="form-control" value="<?php echo set_value('uname') ?>">
                    <?php echo form_error('uname')?>
                  </div>
                  <label class="col-sm-2 control-label">手机</label>
                  <div class="col-sm-4">
                    <input name="mobile" type="text" class="form-control" value="<?php echo set_value('mobile') ?>">
                    <?php echo form_error('mobile')?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">邮箱</label>
                  <div class="col-sm-4">
                    <input name="email" type="text" class="form-control" value="<?php echo set_value('email') ?>">
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
                    <input name="registertime" type="text" class="form-control" id="reservation" value="<?php echo set_value('registertime') ?>">
                    <?php echo form_error('registertime')?>
                    <input name="state" type="hidden" value="1"/>
                    <input name="aid" type="hidden" value="<?php echo $aid ?>"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-4">
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

<# block datatablesjs #>
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
<# /block #>