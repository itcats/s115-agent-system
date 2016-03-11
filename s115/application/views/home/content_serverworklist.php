<# extends home/base_view #>
<?php
/**
 * @Author: itcats
 * @Date:   2016-01-19 14:43:14
 * @Last Modified by:   itcats
 * @Last Modified time: 2016-01-27 11:44:46
 *
 *代理商用户列表
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
        <li><a href="<?php echo site_url('home') ?>"><i class="fa fa-dashboard"></i>控制面板</a></li>
        <li class="active">有效服务器列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">有效服务器列表</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>服务器名称</th>
                  <th>产品名称</th>
                  <th>产品状态</th>
                  <th>产品类型</th>
                  <th>所属用户</th>
                  <th>购买时间</th>
                  <th>到期时间</th>
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
                  <td>企业已审核</td>
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