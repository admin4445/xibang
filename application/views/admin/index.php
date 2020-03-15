  <?php 
   $this->load->library('session');
   $this->load->view('admin/header');
  ?>
  <!-- End: Sidebar -->    
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
      </ol>
    </div>
    <div class="container">
		<div class="col-md-9">
			<div id="docs-content">
				<h2 class="page-header margin-top-none">个人信息</h2>
				<table class="table">
					<tr>
					<td colspan="2">您好，<?php  echo  $this->session->userdata('user');  ?></td>
					</tr>
					<tr>
					<td width="100">最后登录时间:</td>
					<td><?php echo date('Y-m-d H:i:s',$info['admin_lastlogintime']); ?></td>
					</tr>
					<tr>
					<td>最后登录IP:</td>
					<td><?php echo $info['admin_loginip']; ?></td>
					</tr>
				</table>

				<h2 class="page-header margin-top-none">系统信息</h2>
				<table class="table">
				  <tr>
				    <td width="100">操作系统：</td>
				    <td><?php echo $conf['os'] ?></td>
				  </tr>
				  <tr>
				    <td>PHP 版本:</td>
				    <td><?php echo $conf['php_v'] ?></td>
				  </tr>
				  <tr>
				    <td>MySQL 版本:</td>
				    <td><?php echo $conf['mysql_v'] ?></td>
				  </tr>
				</table>
			</div>
		</div>
    </div> 
  </section>
  <!-- End: Content --> 
</div>
<!-- End: Main --></body>

</html>