<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>喜绑</title>
    <link rel="stylesheet" href="<?php echo base_url('./static/home/lib/') ?>bootstrap/css/bootstrap.min.css">

    <script src="<?php echo base_url('./static/home/js/') ?>jquery-3.4.1.min.js"></script>
    <script src="<?php echo base_url('./static/home/lib/') ?>bootstrap/js/bootstrap.min.js"></script>
   
  
</head>
<body>
    <!--头部-->
    <div class="container">
        <nav class="navbar navbar-default ">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"  ><img src="<?php echo base_url('./static/home/images/') ?>logo.jpg" alt="" class="hidden-lg hidden-sm hidden-md " class="img-responsive" ></a>
              </div>
          
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" class="center-block">
                  <?php foreach($nav as $key=>$item){  ?>
                
                  <?php 
                    if($key==2){
                    ?>
                        <li><a href="<?php echo base_url('index.php/'.$item['nav_url'])?>" style="<?php if($navs==$item['nav_url']){echo " border-bottom: 2px rgb(206, 37, 31) solid;
    color: rgb(206, 37, 31);";} ?>"><?php echo $item['nav_name']  ?></a></li>
                        <li class="hidden-xs"><a href="#"><img src="<?php echo base_url('./static/home/images/') ?>logo.jpg" alt="" class="img-responsive  hidden-xs"></a></li>
                    <?php 
                    }else{
                    ?>
                        <li><a  href="<?php echo base_url('index.php/'.$item['nav_url'])?>" style="<?php if($navs==$item['nav_url']){echo " border-bottom: 2px rgb(206, 37, 31) solid;
    color: rgb(206, 37, 31);";} ?>"><?php echo $item['nav_name']  ?></a></li>
                    <?php
                      }
                    ?>
                  <?php } ?>
                </ul>     
              </div>
            </div>
          </nav>

    </div>
    <div class="clear:both"></div>
    <!--banner-->
    <!--轮播-->
    <div id="myCarousel" class="carousel slide">
        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner">

            <?php foreach($ban as $key=>$item){ ?>
            <div class="item <?php if($key==0){echo "active";} ?>">
                <img src="<?php echo base_url($item['ban_url']) ?>" alt="First slide" class="img-responsive center-block" >
                <div class="carousel-caption">
                    <div class="carousel-caption"><span class="btn-wrs"><?php echo $item['ban_name'] ?></span></div>
                </div>
            </div>
            <?php } ?>
            <!-- <div class="item">
                <img src="<?php //echo base_url('./static/home/images/') ?>ad.jpg" alt="Second slide"  class="img-responsive center-block" >
                <div class="carousel-caption">
                    <div class="carousel-caption"><span class="btn-wrs">LEARNMORE</span></div>
                </div>
            </div>
            <div class="item">
                <img src="<?php //echo base_url('./static/home/images/') ?>ad.jpg" alt="Third slide"  class="img-responsive center-block" >
                <div class="carousel-caption">
                    <div class="carousel-caption"><span class="btn-wrs">LEARNMORE</span></div>
                </div>
            </div> -->
        </div>
        <!-- 轮播（Carousel）导航 -->
    </div>