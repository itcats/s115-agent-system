<# extends admin/admin_base_view #>
<?php
/**
 * @Author: itcats
 * @Date:   2016-01-19 14:43:14
 * @Last Modified by:   itcats
 * @Last Modified time: 2016-01-29 16:37:01
 *
 *管理员后台首页内容区块
 *
 */
?>
<# block datatables #>
<link rel="stylesheet" href="<?php echo base_url('static/home/css/datatables/dataTables.bootstrap.css') ?>">
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
<# /block #>

<# block datatablesjs #>
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

<# /block #>