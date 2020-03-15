     
    <?php $this->load->view('header'); ?>
    <link rel="stylesheet" href="<?php  echo base_url('static/home/css/')?>teamdesc.css">
    <!--当前所在位置-->
    <div class="container lianxi">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
            <p style="text-align: right;padding: 20px 0px;color: lightgrey;">所在位置：<span>团队>设计作品</span></p>
            
        </div>
    </div>
    <!--选项卡-->
    <div class="container ">
       <ul class="zuoping">
           <li><a href="<?php echo site_url('Team/index') ?>">团队介绍</a></li>
           <li><a href="<?php echo site_url('Team/show') ?>"><span style=" <?php if($address=='show'){echo "  color: rgb(206, 37, 31);
           border-bottom: 2px rgb(206, 37, 31) solid;
           padding: 5px 0px;";} ?> ">设计作品</span></a></li>
       </ul>
    </div>
    
    <!--案列展示-->
    <div class="container lianxi " >
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"> 
          
            <img src="<?php  echo base_url('static/home/images/') ?>title_bg.png" alt="" >
            <p class="brand-title">作品介绍</p>
      </div> 
    </div>
    <!--人物描述-->
    <div class='container lianxi '>
        <div class="media">
            <div class="media-left media-middle">
              <a href="#">
                <img class="media-object" src="<?php  echo base_url($teaminfo['team_img']); ?>" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="media-body" >
              <h4 class="media-heading"><?php echo $teaminfo['team_name'] ?></h4>
              <p class="media-title"> <?php echo $teaminfo['team_position'] ?></p>
              <p  class="media-content">
                  <?php echo $teaminfo['team_desc'] ?>
              </p >
            </div>
          </div>
          <div>
              <hr>
          </div>
          <?php foreach($worksinfo as $item){?>
            <div class="col-md-4 col-sm-4 col-lg-4 col-lg-4 zuo-img boxs">
                <img src="<?php  echo base_url($item['works_img']) ?>" alt="" class="img-responsive center-block">
            </div>
          <?php } ?>

           
    </div>
    <div class="container page" >
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <p style="text-align: center;">
            <?php if($prev !=""){?>
            <a href="<?php echo site_url('Team/show/').$prev['team_id'] ?>">上一篇</a> 
            <?php } ?>
            <?php if($next != ""){?>
             <a href="<?php echo site_url('Team/show/').$next['team_id'] ?>">下一篇</a> 
            <?php } ?>
             </p>
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
    </div>  -->
    <?php $this->load->view('footer') ?>
</body>
</html>