<?php 
$islogin = $this->session->userdata('islogin');
if($islogin!=1){
       $url = site_url('admin/login/index');
       echo "<script>alert('请先登陆');window.location.href='".$url."'</script>";
}


?>
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
  <link rel="stylesheet" type="text/css" href="<?php  echo base_url('/static/admin/css/')?>glyphicons.min.css">

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
  
  <!-- Core Javascript - via CDN --> 
  <script type="text/javascript" src="<?php  echo base_url('/static/admin/js/')?>jquery.min.js"></script> 
  <script type="text/javascript" src="<?php  echo base_url('/static/admin/js/')?>jquery-ui.min.js"></script> 
  <script type="text/javascript" src="<?php  echo base_url('/static/admin/js/')?>bootstrap.min.js"></script> 
  <script type="text/javascript" src="<?php  echo base_url('/static/admin/js/')?>uniform.min.js"></script> 
  <script type="text/javascript" src="<?php  echo base_url('/static/admin/js/')?>main.js"></script>
  <script type="text/javascript" src="<?php  echo base_url('/static/admin/js/')?>custom.js"></script> 
</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
  <div class="pull-left"> <a class="navbar-brand" href="#">
    <div class="navbar-logo"><img src="<?php  echo base_url('/static/admin/images/')?>logo.png" alt="logo"></div>
    </a> </div>
  <div class="pull-right header-btns">
    <a class="user"><span class="glyphicons glyphicon-user"></span> <?php echo  $this->session->userdata('user'); ?></a>
    <a href="<?php echo site_url('admin/user/loginout'); ?>" class="btn btn-default btn-gradient" type="button"><span class="glyphicons glyphicon-log-out"></span> 退出</a>
  </div>
</header>
<!-- End: Header -->

<!-- Start: Main -->
<div id="main"> 
    <!-- Start: Sidebar -->
  <aside id="sidebar" class="affix">
    <div id="sidebar-search">
    		<div class="sidebar-toggle"><span class="glyphicon glyphicon-resize-horizontal"></span></div>
    </div>
    <div id="sidebar-menu">
      <ul class="nav sidebar-nav">
        <li class="<?php if($name=="Home"){echo "active";} ?>">
          <a href="<?php echo site_url('admin/Home/index') ?>"><span class="glyphicons glyphicon-home"></span><span class="sidebar-title">后台首页</span></a>
        </li>

        <li class="<?php if($name=="Nav"){echo "active";} ?>"> <a href="#sideEight" class="accordion-toggle <?php if($name=="Nav"){echo "menu-open";}?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">导航管理</span><span class="caret"></span></a>
          <ul class="nav sub-nav" id="sideEight" style="">
            <li class="<?php if($name=="Nav"){echo "active";} ?>">
            <a href="<?php echo site_url('admin/Nav/index'); ?>" class="menu-open"><span class="glyphicons glyphicon-record"></span>导航列表</a>
            </li>
          
          </ul>
        </li>
        <li class="<?php if($name=="Banner"){echo "active";} ?>"> <a href="#sideEight" class="accordion-toggle <?php if($name=="Banner"){echo "menu-open";}?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">轮播图管理</span><span class="caret"></span></a>
          <ul class="nav sub-nav" id="sideEight" style="">
            <li class="<?php if($name=="Banner"){echo "active";} ?>">
            <a href="<?php echo site_url('admin/Banner/index'); ?>" class="menu-open"><span class="glyphicons glyphicon-record"></span>轮播图列表</a>
            </li>
          
          </ul>
        </li>

        <li class="<?php if($name=="Industry"){echo "active";} ?>"> <a href="#sideEight" class="accordion-toggle <?php if($name=="Industry"){echo "menu-open";}?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">产业管理</span><span class="caret"></span></a>
          <ul class="nav sub-nav" id="sideEight" style="">
            <li class="<?php if($name=="Industry"){echo "active";} ?>">
            <a href="<?php echo site_url('admin/Industry/index'); ?>" class="menu-open"><span class="glyphicons glyphicon-record"></span>产业列表</a>
            </li>
          
          </ul>
        </li>
        <li class="<?php if($name=="Works"){echo "active";} ?>"> <a href="#sideEight" class="accordion-toggle <?php if($name=="Works"){echo "menu-open";}?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">作品管理</span><span class="caret"></span></a>
          <ul class="nav sub-nav" id="sideEight" style="">
            <li class="<?php if($name=="Works"){echo "active";} ?>">
            <a href="<?php echo site_url('admin/Works/index'); ?>" class="menu-open"><span class="glyphicons glyphicon-record"></span>作品列表</a>
            </li>
          
          </ul>
        </li>
        <li class="<?php if($name=="News"){echo "active";} ?>"> <a href="#sideEight" class="accordion-toggle <?php if($name=="News"){echo "menu-open";}?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">新闻管理</span><span class="caret"></span></a>
          <ul class="nav sub-nav" id="sideEight" style="">
            <li class="<?php if($name=="News"){echo "active";} ?>">
            <a href="<?php echo site_url('admin/News/index'); ?>" class="menu-open"><span class="glyphicons glyphicon-record"></span>新闻列表</a>
            </li>
          
          </ul>
        </li>
        <li class="<?php if($name=="Newtype"){echo "active";} ?>"> <a href="#sideEight" class="accordion-toggle <?php if($name=="Newtype"){echo "menu-open";}?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">新闻分类</span><span class="caret"></span></a>
          <ul class="nav sub-nav" id="sideEight" style="">
            <li class="<?php if($name=="Newtype"){echo "active";} ?>">
            <a href="<?php echo site_url('admin/Newtype/index'); ?>" class="menu-open"><span class="glyphicons glyphicon-record"></span>分类列表</a>
            </li>
          
          </ul>
        </li>
        <li class="<?php if($name=="Team"){echo "active";} ?>"> <a href="#sideEight" class="accordion-toggle <?php if($name=="Team"){echo "menu-open";}?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">团队管理</span><span class="caret"></span></a>
          <ul class="nav sub-nav" id="sideEight" style="">
            <li class="<?php if($name=="Team"){echo "active";} ?>">
            <a href="<?php echo site_url('admin/Team/index'); ?>" class="menu-open"><span class="glyphicons glyphicon-record"></span>团队列表</a>
            </li>
          
          </ul>
        </li>

        <li class="<?php if($name=="Cases"){echo "active";} ?>"> <a href="#sideEight" class="accordion-toggle <?php if($name=="Cases"){echo "menu-open";}?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">案例管理</span><span class="caret"></span></a>
          <ul class="nav sub-nav" id="sideEight" style="">
            <li class="<?php if($name=="Cases"){echo "active";} ?>">
            <a href="<?php echo site_url('admin/Cases/index'); ?>" class="menu-open"><span class="glyphicons glyphicon-record"></span>案例列表</a>
            </li>
          
          </ul>
        </li>
         <li class="<?php if($name=="Casetype"){echo "active";} ?>"> <a href="#sideEight" class="accordion-toggle <?php if($name=="Casetype"){echo "menu-open";}?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">案例类型</span><span class="caret"></span></a>
          <ul class="nav sub-nav" id="sideEight" style="">
            <li class="<?php if($name=="Casetype"){echo "active";} ?>">
            <a href="<?php echo site_url('admin/Casetype/index'); ?>" class="menu-open"><span class="glyphicons glyphicon-record"></span>类型列表</a>
            </li>
          
          </ul>
        </li>
        <li class="<?php if($name=="About"){echo "active";} ?>"> <a href="#sideEight" class="accordion-toggle <?php if($name=="About"){echo "menu-open";}?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">关于我们</span><span class="caret"></span></a>
          <ul class="nav sub-nav" id="sideEight" style="">
            <li class="<?php if($name=="About"){echo "active";} ?>">
            <a href="<?php echo site_url('admin/About/index'); ?>" class="menu-open"><span class="glyphicons glyphicon-record"></span>关于我们列表</a>
            </li>
          
          </ul>
        </li>
        <li class="<?php if($name=="Abolib"){echo "active";} ?>"> <a href="#sideEight" class="accordion-toggle <?php if($name=="Abolib"){echo "menu-open";}?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">关于类型</span><span class="caret"></span></a>
          <ul class="nav sub-nav" id="sideEight" style="">
            <li class="<?php if($name=="Abolib"){echo "active";} ?>">
            <a href="<?php echo site_url('admin/Abolib/index'); ?>" class="menu-open"><span class="glyphicons glyphicon-record"></span>类型列表</a>
            </li>
          
          </ul>
        </li>
        <li class="<?php if($name=="Contact"){echo "active";} ?>"> <a href="#sideEight" class="accordion-toggle <?php if($name=="Contact"){echo "menu-open";}?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">联系我们</span><span class="caret"></span></a>
          <ul class="nav sub-nav" id="sideEight" style="">
            <li class="<?php if($name=="Contact"){echo "active";} ?>">
            <a href="<?php echo site_url('admin/Contact/index'); ?>" class="menu-open"><span class="glyphicons glyphicon-record"></span>联系列表</a>
            </li>
          
          </ul>
        </li>
        <li class="<?php if($name=="Links"){echo "active";} ?>"> <a href="#sideEight" class="accordion-toggle <?php if($name=="Links"){echo "menu-open";}?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">友情链接</span><span class="caret"></span></a>
          <ul class="nav sub-nav" id="sideEight" style="">
            <li class="<?php if($name=="Links"){echo "active";} ?>">
            <a href="<?php echo site_url('admin/Links/index'); ?>" class="menu-open"><span class="glyphicons glyphicon-record"></span>友情链接列表</a>
            </li>
          
          </ul>
        </li>

        <li class="<?php if($name=="Conf"){echo "active";} ?>"> <a href="#sideEight" class="accordion-toggle <?php if($name=="Conf"){echo "menu-open";}?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">网站配置</span><span class="caret"></span></a>
          <ul class="nav sub-nav" id="sideEight" style="">
            <li class="<?php if($name=="Conf"){echo "active";} ?>">
            <a href="<?php echo site_url('admin/Conf/index'); ?>" class="menu-open"><span class="glyphicons glyphicon-record"></span>配置列表</a>
            </li>
          
          </ul>
        </li>

        
    </div>
  </aside>