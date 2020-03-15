<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<title>CMS内容管理系统</title>
	<meta name="keywords" content="Admin">
	<meta name="description" content="Admin">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Core CSS  -->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url('/static/admin/css/')?>bootstrap.css">
	
	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url('/static/admin/css/')?>theme.css">
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url('/static/admin/css/')?>pages.css">
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url('/static/admin/css/')?>plugins.css">
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url('/static/admin/css/')?>responsive.css">

	<!-- Boxed-Layout CSS -->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url('/static/admin/css/')?>boxed.css">

	<!-- Demonstration CSS -->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url('/static/admin/css/')?>demo.css">

	<!-- Your Custom CSS -->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url('/static/admin/css/')?>custom.css">

</head>

<body class="login-page">

<!-- Start: Main -->
<div id="main">
  <div class="container">
    <div class="row">
      <div id="page-logo"></div>
    </div>
    <div class="row">
      <div class="panel">
        <div class="panel-heading">
          <div class="panel-title">CMS内容管理系统</div>
		</div>
    <?php echo form_open('admin/user/index'); ?>
          <div class="panel-body">
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon">用户名</span>
                <input type="text" name="username" class="form-control phone" maxlength="10" autocomplete="off" placeholder="">
              </div>
              <span><?php echo form_error('username'); ?></span>
            </div>
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon">密&nbsp;&nbsp;&nbsp;码</span>
                <input type="password" name="password" class="form-control product" maxlength="10" autocomplete="off" placeholder="">
              </div>
              <span><?php echo form_error('password'); ?></span>
            </div>
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon">验证码</span>
                <input type="text" name="code" class="form-control product" maxlength="10" autocomplete="off" placeholder="请输入验证码" required style="width:60%">
                <div id="imgid" style="float:right">
                    <?php  echo $code ;?>
                </div>
                
              </div>
            </div>
          </div>
          <div class="panel-footer"> <span class="panel-title-sm pull-left" style="padding-top: 7px;"></span>
            <div class="form-group margin-bottom-none">
              <input class="btn btn-primary pull-right" type="submit" name="sub" value="登 录" />
              <div class="clearfix"></div>
            </div>
          </div>
       
      </div>
    </div>
  </div>
</div>
<!-- End: Main --> 

<!-- Core Javascript - via CDN --> 
<script src="<?php  echo base_url('/static/admin/js/')?>jquery.min.js"></script> 
<script src="<?php  echo base_url('/static/admin/js/')?>jquery-ui.min.js"></script> 
<script src="<?php  echo base_url('/static/admin/js/')?>bootstrap.min.js"></script> <!-- Theme Javascript --> 
<script type="text/javascript" src="<?php  echo base_url('/static/admin/js/')?>uniform.min.js"></script> 
<script type="text/javascript" src="<?php  echo base_url('/static/admin/js/')?>main.js"></script>
<script type="text/javascript" src="<?php  echo base_url('/static/admin/js/')?>custom.js"></script> 
<script type="text/javascript">

jQuery(document).ready(function() {

	// Init Theme Core 	  
	Core.init();   
  $(document).ready(function(){
		$('#imgid').click(function(){
      window.location.reload();
		});
	});
	
});

</script>
</body>

</html>
