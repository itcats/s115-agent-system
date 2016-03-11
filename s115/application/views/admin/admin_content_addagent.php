<# extends admin/admin_base_view #>
<?php
/**
 * @Author: itcats
 * @Date:   2016-01-29 10:27:17
 * @Last Modified by:   itcats
 * @Last Modified time: 2016-02-01 16:42:51
 *
 *添加代理商视图
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
        <li><a href="<?php echo site_url('admin') ?>"><i class="fa fa-dashboard"></i>控制面板</a></li>
        <li class="active">添加代理商</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">添加代理商</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo site_url('admin/getaddagent') ?>" method="POST">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">代理商名称</label>
                  <div class="col-sm-4">
                    <input name="agentname" type="text" class="form-control" placeholder="代理商名称" value="<?php echo set_value('agentname') ?>">
                    <?php echo form_error('agentname')?>
                  </div>
                  <label class="col-sm-2 control-label">代理商地址</label>
                  <div class="col-sm-4">
                    <input name="address" type="text" class="form-control" placeholder="代理商联系地址" value="<?php echo set_value('address') ?>">
                    <?php echo form_error('address')?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">负责人</label>
                  <div class="col-sm-4">
                    <input name="manager" type="text" class="form-control" placeholder="代理负责人姓名" value="<?php echo set_value('manager') ?>">
                    <?php echo form_error('manager')?>
                  </div>
                  <label class="col-sm-2 control-label">负责人身份证</label>
                  <div class="col-sm-4">
                    <input name="identity" type="text" class="form-control" placeholder="负责人身份证" value="<?php echo set_value('identity') ?>">
                    <?php echo form_error('identity')?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">代理商折扣</label>
                  <div class="col-sm-4">
                    <input name="discount" type="text" class="form-control" placeholder="代理商折扣，精确到小数点后2位" value="<?php echo set_value('discount') ?>">
                    <?php echo form_error('discount')?>
                  </div>
                  <label class="col-sm-2 control-label">代理商性质</label>
                  <div class="col-sm-4">
                   <select class="form-control select2" name="nature" value="<?php echo set_value('nature') ?>">
                      <option value="个人">个人</option>
                      <option value="公司">公司</option>
                   </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">加盟时间</label>
                  <div class="col-sm-4">
                    <input name="jointime" type="text" class="form-control" id="reservation" placeholder="加盟时间" value="<?php echo set_value('jointime') ?>">
                  </div>
                  <label class="col-sm-2 control-label">营业执照</label>
                  <div class="col-sm-4">
                    <input name="license" type="text" class="form-control" placeholder="营业执照，个人可不填" value="<?php echo set_value('license') ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">手机</label>
                  <div class="col-sm-4">
                    <input name="phone" type="text" class="form-control" placeholder="手机" value="<?php echo set_value('phone') ?>">
                    <?php echo form_error('phone')?>
                  </div>
                  <label class="col-sm-2 control-label">QQ</label>
                  <div class="col-sm-4">
                    <input name="qq" type="text" class="form-control" placeholder="QQ" value="<?php echo set_value('qq') ?>">
                    <?php echo form_error('qq')?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">微信</label>
                  <div class="col-sm-4">
                    <input name="wechat" type="text" class="form-control" placeholder="微信" value="<?php echo set_value('wechat') ?>">
                    <?php echo form_error('wechat')?>
                  </div>
                  <label class="col-sm-2 control-label">邮箱</label>
                  <div class="col-sm-4">
                    <input name="email" type="text" class="form-control" placeholder="邮箱" value="<?php echo set_value('email') ?>">
                    <?php echo form_error('email')?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">支付宝账户名</label>
                  <div class="col-sm-4">
                    <input name="alipayname" type="text" class="form-control" placeholder="支付宝账户名" value="<?php echo set_value('alipayname') ?>">
                    <?php echo form_error('alipayname')?>
                  </div>
                  <label class="col-sm-2 control-label">支付宝账号</label>
                  <div class="col-sm-4">
                    <input name="alipay" type="text" class="form-control" placeholder="支付宝账号" value="<?php echo set_value('alipay') ?>">
                    <?php echo form_error('alipay')?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">开户银行</label>
                  <div class="col-sm-4">
                    <input name="bank" type="text" class="form-control" placeholder="开户银行，精确到支行" value="<?php echo set_value('bank') ?>">
                  </div>
                  <label class="col-sm-2 control-label">开户名</label>
                  <div class="col-sm-4">
                    <input name="cardholder" type="text" class="form-control" placeholder="开户名" value="<?php echo set_value('cardholder') ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">银行卡号</label>
                  <div class="col-sm-4">
                    <input name="bankcard" type="text" class="form-control" placeholder="银行卡号" value="<?php echo set_value('bankcard') ?>">
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">添加</button>
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