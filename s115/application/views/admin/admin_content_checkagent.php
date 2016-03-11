<# extends admin/admin_base_view #>
<?php
/**
 * @Author: itcats
 * @Date:   2016-02-01 14:35:31
 * @Last Modified by:   itcats
 * @Last Modified time: 2016-02-01 16:54:09
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
        <li class="active">代理商列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">代理商列表</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>代理商名称</th>
                  <th>负责人姓名</th>
                  <th>手机号码</th>
                  <th>微信</th>
                  <th>折扣</th>
                  <th>加盟时间</th>
                  <th style="width:110px">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($agent as $v):?>
                <tr>
                  <td><?php echo $v['agentname']?></td>
                  <td><?php echo $v['manager']?></td>
                  <td><?php echo $v['phone']?></td>
                  <td><?php echo $v['wechat']?></td>
                  <td><?php echo $v['discount']?></td>
                  <td><?php echo $v['jointime']?></td>
                  <td>
                      <div class="row">
                        <div class="col-md-6">
                          <form action="<?php echo site_url('admin/editagent') ?>" method="POST">
                            <input name="phone" type="hidden" value="<?php echo $v['phone'] ?>"/>
                            <button type="submit" class="btn btn-primary">编辑</button>
                          </form>
                        </div>

                        <div class="col-md-6">
                          <form action="<?php echo site_url('') ?>" method="POST">
                            <input name="aid" type="hidden" value="<?php echo $v['aid'] ?>"/>
                            <button type="submit" class="btn btn-warning">停用</button>
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