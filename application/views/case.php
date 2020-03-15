    <?php $this->load->view('header'); ?>
    <link rel="stylesheet" href="<?php  echo base_url('static/home/css/')?>cases.css">
    <!--选项卡-->
    <div class="xuanxiang container ">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="<?php echo site_url('Cases/index/0') ?>"><span style="<?php if($newsadd==""||$newsadd==0){echo "color: rgb(206, 37, 31);
           border-bottom: 2px rgb(206, 37, 31) solid;
           padding: 5px 0px;";} ?>">全部设计</span></a>
            </div>
          <?php  foreach($casetype as $item){ ?>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="<?php echo site_url('Cases/index/').$item['case_type_id'] ?>"><span style="<?php if($newsadd==$item['case_type_id']){echo "color: rgb(206, 37, 31);
           border-bottom: 2px rgb(206, 37, 31) solid;
           padding: 5px 0px;";} ?>"><?php echo $item['case_type_name'] ?></span></a>
            </div>
          <?php } ?>
        <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a href="#"><span>设计作品</span></a>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <a href="#"><span>面膜设计</span></a>
        </div> -->
    </div>
    <!--当前所在位置-->
    <div class="container lianxi">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
            <p>所在位置：<span>案例></span>
            <?php if($newsadd==""||$newsadd==0){ ?>
                <span>全部设计</span>
            <?php }else{ ?>
                <?php foreach($casetype as $item){ ?>
                <span><?php if($newsadd==$item['case_type_id']){echo $item['case_type_name'];} ?></span>
                <?php } ?>
            <?php } ?>
           </p>
            
        </div>
    </div>
    <!--案列展示-->
    <div class="container lianxi">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"> 
            <img src="<?php  echo base_url('static/home/images/')?>title_bg.png" alt="" >
            <p class="brand-title">案列展示</p>
      </div> 
    </div>
    <div class="container anlie lianxi ">
       <?php foreach($caseinfo as $item){ ?>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12 boxs">
            <a href="<?php echo site_url('Cases/deail/').$newsadd.'/'.$item['case_id'] ?>"><img src="<?php  echo base_url().$item['case_img']?>" alt="" class="img-responsive"></a> 
            <p class="anlie-title"><b><?php echo $item['case_name']; ?></b></p>
            <p class="anlie-content">
               <?php echo $item['case_desc'] ?>
            </p>
        </div>
       <?php } ?>
       

    </div>
    
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