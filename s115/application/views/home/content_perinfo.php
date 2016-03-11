<# extends home/base_view #>
<?php
/**
 * @Author: itcats
 * @Date:   2016-01-18 23:04:41
 * @Last Modified by:   itcats
 * @Last Modified time: 2016-01-29 10:44:43
 *
 *代理商个人信息
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
<# /block #>