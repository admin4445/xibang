<?php $this->load->view('admin/header'); ?>
  <!-- End: Sidebar -->   

  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">团队管理</li>
      </ol>
    </div>
    <div class="container">







	 <div class="row">
        <div class="col-md-12">
			<div class="panel">
                <div class="panel-heading">
                  <div class="panel-title">团队列表</div>
                  <a href="<?php echo site_url('admin/Team/add') ?>" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加成员</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <h2 class="panel-body-title">团队列表</h2>
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center" width="100"><input type="checkbox" value="" id="checkall" class=""> 全选</th>
                        <th>图片</th>
                        <th>名字</th>
                        <th>担任职位</th>
                        <th>毕业学校</th>
                        <th width="200">操作</th>
                      </tr>
                      <?php foreach($team as $item){ ?>
                    	<tr class="success">
                        <td class="text-center"><input type="checkbox" value="<?php echo $item['team_id'] ?>" name="idarr[]" class="cbox"></td>
                        <td><img src="<?php echo base_url().$item['team_img'];?>" width="200";height="150"></td>
                        <td><?php echo $item['team_name'] ?></td>
                        <td><?php echo $item['team_position'] ?></td>
                        <td><?php echo $item['team_School'] ?></td>
                        <td>
		                      <div class="btn-group">
		                        <a href="<?php echo site_url('admin/Team/edit/').$item['team_id']; ?>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
		                        <a onclick="return confirm('确定要删除吗？');" href="<?php echo site_url('admin/Team/del/').$item['team_id']; ?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
		                      </div>
                        
                        </td>
                      </tr>
                      <?php } ?>
                     
                  </table>
                  
                  <div class="pull-left">
                  	<button type="submit" class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>
                  </div>
                  
                  <div class="pull-right">
                    <?php echo $page; ?>
                  </div>
                  
                </div>
                </form>
              </div>
          </div>
        </div>




        
    </div>
  </section>
  <!-- End: Content --> 
</div>
<!-- End: Main --> 
</body>
</html>