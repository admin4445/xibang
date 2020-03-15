    <?php $this->load->view('header'); ?>
    
    <link rel="stylesheet" href="<?php echo base_url('/static/home/css/') ?>company.css">
    <!--当前所在位置-->
    <div class="container positions">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
            <p style="text-align: right;">所在位置：<span>公司</span></p>
            
        </div>
    </div>
     <!--选项卡-->
     <div class="xuanxiang container lianxi">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="row">
                <?php foreach($type as $item){ ?>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="<?php echo "#".$item['abo_id']; ?>"><span><?php echo $item['abo_title'] ?></span></a>
                </div>
                <?php }?>
                  
                <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a><span>企业文化</span></a>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a><span>企业环境</span></a>
                </div> -->

            </div>
        </div>
        <div class="col-lg-8 col-sm-8 col-md-8  hidden-xs">
          
        </div>
       
    </div>
    <!--广告案列-->

    <div class="container lianxi" id="<?php echo $type[0]['abo_id'] ?>">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"> 
            <img src="<?php echo base_url('/static/home/images/') ?>title_bg.png" alt="" class="img-responsive title_bg "  >
            <p class="brand-title"><?php echo $type[0]['abo_title'] ?></p>
            <p class="brand-conent"><?php echo $type[0]['abo_en_title'] ?></p>
      </div> 
    </div>

    <div class="container brand lianxi" >
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <p class="brand-title">广州喜邦广告设计有限公司</p>
            <p class="brand-conent">Guangzhou xiban advertising design co., LTD</p>
            <p class="brand-conents">
               <?php echo $type[0]['abo_desc'] ?>
            </p>
        </div>  
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commany_01">

            <!-- <div class="col-md-3 col-sm-12 col-lg-3 col-xs-12">
               <div>
                    <img src="<?php echo base_url('/static/home/images/') ?>01.png" alt="" class="img-responsive center-block  auot-img">
               </div>
              
               
            </div>
            <div class="col-md-3 col-sm-12 col-lg-3 col-xs-12">
               <div>
                    <img src="<?php echo base_url('/static/home/images/') ?>01.png" alt="" class="img-responsive center-block  auot-img">
               </div>
               
               
            </div> -->

            <!-- <div class="col-md-3 col-sm-12 col-lg-3 col-xs-12">
                <img src="<?php echo base_url('/static/home/images/') ?>02.png" alt="" class="img-responsive  center-block auot-img">
            </div>

            <div class="col-md-3 col-sm-12 col-lg-3 col-xs-12">
                <img src="<?php echo base_url('/static/home/images/') ?>03.png" alt="" class="img-responsive  center-block auot-img">
            </div> -->
            <!-- <div class="col-md-3 col-sm-12 col-lg-3 col-xs-12">
                <img src="<?php echo base_url('/static/home/images/') ?>04.png" alt="" class="img-responsive  center-block auot-img">
            </div>
            <div class="col-md-3 col-sm-12 col-lg-3 col-xs-12">
                <img src="<?php echo base_url('/static/home/images/') ?>01.png" alt="" class="img-responsive  center-block auot-img">
            </div>
            <div class="col-md-3 col-sm-12 col-lg-3 col-xs-12">
                <img src="<?php echo base_url('/static/home/images/') ?>02.png" alt="" class="img-responsive  center-block auot-img">
            </div>
            <div class="col-md-3 col-sm-12 col-lg-3 col-xs-12">
                <img src="<?php echo base_url('/static/home/images/') ?>03.png" alt="" class="img-responsive center-block auot-img">
            </div>
            <div class="col-md-3 col-sm-12 col-lg-3 col-xs-12">
            <img src="<?php echo base_url('/static/home/images/') ?>04.png" alt="" class="img-responsive center-block  auot-img">
            </div> -->
            <img src="<?php echo base_url('/static/home/images/') ?>company/company_01.jpg" alt="" class="img-responsive ">
        </div>
    </div>
    <div class="container lianxi" style="margin-top: 20px;" id="<?php echo $type[1]['abo_id'] ?>">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"> 
            <img src="<?php echo base_url('/static/home/images/') ?>title_bg.png" alt="" class="img-responsive title_bg "  >
            <p class="brand-title"><?php echo $type[1]['abo_title'] ?></p>
            <p class="brand-conent"><?php echo $type[1]['abo_en_title'] ?></p>
            
      </div> 
    </div>
    <!--企业文化-->
    <div class="container commany_01 lianxi" >
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <p class="brand-conents">
            <?php echo $type[1]['abo_desc'] ?>
            </p>
        </div>

            <?php foreach($wenhua as $item){ ?>
            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-3">
                <img src="<?php echo base_url($item['abo_libimg_img']) ?>" alt="" class="center-block img-responsive " style="padding:10px 18px;">
                <p class="niubaclass"><?php echo $item['abo_libimg_title'].$item['abo_libimg_etitle']?></p>
            </div>
            <?php } ?>
           
        
        
    </div>
    <!--公司环境-->
    <div class="container lianxi" style="margin-top: 20px;" id="<?php echo $type[2]['abo_id'] ?>">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"> 
            <img src="<?php echo base_url('/static/home/images/') ?>title_bg.png" alt="" class="img-responsive title_bg "  >
            <p class="brand-title"><?php echo $type[2]['abo_title'] ?></p>
            <p class="brand-conent"><?php echo $type[2]['abo_en_title'] ?></p>
            
      </div> 
    </div>
    <div class="container commany_01 lianxi  " >
        <?php foreach($huanjin as $item){ ?>
        <div class="col-xs-12 col-md-6 col-sm-6 col-lg-3">
            <img src="<?php echo base_url($item['abo_libimg_img']) ?>" alt="" class="center-block img-responsive" style="padding:10px 18px;">
            <p class="niubaclass"><?php echo $item['abo_libimg_title'] ?></p>
        </div>
        <?php } ?>
       
    </div>


    <!--footer  --> 
    <!-- <div class="footer">
        <div class="container ">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
              <img src="<?php echo base_url('./static/home/images/') ?>logo-2.png" alt="" class="img-responsive center-block">
            </div>
            <div class="col-md-4 col-sm-4 col-lg-4 hidden-xs">
                <p><?php echo $conf[0]['conf_name'] ?></p>
                <p>
                友情链接：中国雅芳 百确翎 自然堂 巴黎欧莱雅 谷歌
                </p>
                <p> <?php echo $conf[0]['conf_copy'] ?>    </p>
           </div>
          <div class="col-md-4 col-sm-4 col-lg-4  hidden-xs">
                <p><?php echo $conf[0]['conf_email'] ?></p>
                <p><img src="<?php echo base_url('./static/home/images/') ?>phone.png" alt=""><?php echo  $conf[0]['conf_tel'] ?></p>
                <p><?php echo $conf[0]['conf_add'] ?></p>
          </div>
      </div>
    </div> -->
    <?php $this->load->view('footer') ?>


  
    
</body>
</html>