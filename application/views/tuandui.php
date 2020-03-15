 
    <?php $this->load->view('header'); ?>
    <link rel="stylesheet" href="<?php  echo base_url('static/home/css/')?>team.css">
     <!--选项卡-->
     <div class="xuanxiang container">
        <div class="col-lg-4 col-sm-4 col-md-4  hidden-xs">
          
        </div>
       
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="<?php echo site_url('Team/index') ?>" ><span style=" <?php if($address=='index'||$address==""){echo "color: rgb(206, 37, 31);
                border-bottom: 2px rgb(206, 37, 31) solid;";} ?> ">团队介绍</span></a>
                </div>
                  
                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-6">
                    <a href="<?php echo site_url('Team/show') ?>"><span  >设计作品</span></a>
                </div>
              
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4  hidden-xs">
          
        </div>
       
    </div>
     <!--当前所在位置-->
     <div class="container positions">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 ">
            <p class="posisions-left">所在位置：<span>首页></span><span>团队介绍</span></p>
        </div>
    </div>
    <!--团队介绍-->
    <div class="container lianxi" >
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"> 
            <img src="<?php  echo base_url('static/home/images/') ?>title_bg.png" alt="" class="img-responsive title_bg "  >
            <p class="brand-title">团队介绍</p>
           
      </div> 
    </div>
    <!--人物介绍-->
    <?php foreach($teaminfo as $item){ ?>
    <div class="container  renwu boxs">
        <div class="ren-img" >
            <img src="<?php  echo base_url($item['team_img']) ?>" alt="" class="img-responsive">
            <p class="renwu-name"><b><?php echo $item['team_name'] ?></b></p>
            <p class="renwu-desc"><b><?php echo $item['team_position'] ?></b></p>
            <p class="renwu-content">
               <?php  echo $item['team_desc']?>
            </p>
        </div>
    </div>
    <?php } ?>
   

    <!--分页-->
    <div class="container" >
    <div class="text-center">
        <ul class="pagination">
        
          <?php echo $page; ?>
        </ul>
      </div>
     
    </div>

    <!--footer  --> 
    <!-- <div class="footer">
        <div class="container">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
              <img src="<?php  echo base_url('static/home/images/') ?>logo-2.png" alt="" class="img-responsive center-block">
            </div>
            <div class="col-md-4 col-sm-4 col-lg-4 hidden-xs">
                <p>喜邦品牌十年深耕化妆品产业</p>
                <p>友情链接：中国雅芳 百确翎 自然堂 巴黎欧莱雅 谷歌</p>
                <p>广州喜邦品牌顾问&设计有限公司版权所有 粤ICP备0754673     </p>
           </div>
          <div class="col-md-4 col-sm-4 col-lg-4  hidden-xs">
                <p>E-mail:758057640@qq.com</p>
                <p><img src="<?php  echo base_url('static/home/images/') ?>phone.png" alt="">全国免费咨询热线：40000-138-136</p>
                <p>地址：广州市白云区新市齐富路联富大厦6018</p>
          </div>
      </div>
    </div> -->
    <?php $this->load->view('footer') ?>


  
    
</body>
</html>