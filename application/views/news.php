    
     
    <?php $this->load->view('header'); ?>
    <link rel="stylesheet" href="<?php  echo base_url('static/home/css/')?>news.css">
    <!--选项卡-->
    <div class="xuanxiang container ">
        <?php foreach($newtype as $item){ ?>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <a href="<?php echo site_url('News/show/').$item['news_type_id'] ?>"><span style="<?php if($newsadd==$item['news_type_id']){echo "color: rgb(206, 37, 31);
           border-bottom: 2px rgb(206, 37, 31) solid;
           padding: 5px 0px;";} ?>"><?php echo $item['news_name'] ?></span></a>
        </div>
        <?php } ?>
       
    </div>
    <!--当前所在位置-->
    <div class="container lianxi">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
            <p>所在位置：<span>资讯></span>
            <?php if($newsadd==""||$newsadd==0){ ?>
                <span>全部新闻</span>
            <?php }else{ ?>
                <?php foreach($newtype as $item){ ?>
                <span><?php if($newsadd==$item['news_type_id']){echo $item['news_name'];} ?></span>
                <?php } ?>
            <?php } ?>
            </p>
            
        </div>
    </div>
    <!--案列展示-->
    <div class="container lianxi">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"> 
            <img src="<?php echo base_url('static/home/images/') ?>title_bg.png" alt="" >
            <p class="brand-title">喜绑新闻</p>
      </div> 
    </div>
    <div class="container anlie lianxi">
        <p class="news-title"><?php echo $info['news_title'] ?></p>
        <p class="news-content">发布者:<?php  echo $info['news_author'] ?>发布时间 : <?php echo $info['news_author'] ?></p>
      

    </div>
    <div class="container lianxi ">
        <img src="<?php echo base_url($info['news_img']) ?>" alt=" " style="padding: 10px 15px;" class="img-responsive center-block">
        <p class="news-text text-center" >
          <?php echo htmlspecialchars_decode($info['news_content'])      ?>
        </p>
    </div>
    <div class="container page" >
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <p style="text-align: center;">
                <?php if($prev !=""){?>
                <a href="<?php echo site_url('News/show/').$ids.'/'.$prev['news_id'] ?>">上一篇</a> 
                <?php } ?>
                <?php if($next != ""){?>
                <a href="<?php echo site_url('News/show/').$ids.'/'.$next['news_id'] ?>">下一篇</a> 
                <?php } ?>
        
            </p>
        </div>
    </div>
   
    <!--分页-->
    <div>

    </div>
   

    <!--footer -->
    <!-- <div class="footer">
        <div class="container">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
              <img src="<?php echo base_url('static/home/images/') ?>logo-2.png" alt="" class="img-responsive center-block">
            </div>
            <div class="col-md-4 col-sm-4 col-lg-4 hidden-xs">
                <p>喜邦品牌十年深耕化妆品产业</p>
                <p>友情链接：中国雅芳 百确翎 自然堂 巴黎欧莱雅 谷歌</p>
                <p>广州喜邦品牌顾问&设计有限公司版权所有 粤ICP备0754673     </p>
           </div>
          <div class="col-md-4 col-sm-4 col-lg-4  hidden-xs">
                <p>E-mail:758057640@qq.com</p>
                <p><img src="<?php echo base_url('static/home/images/') ?>phone.png" alt="">全国免费咨询热线：40000-138-136</p>
                <p>地址：广州市白云区新市齐富路联富大厦6018</p>
          </div>
      </div>
    </div> -->
    <?php $this->load->view('footer') ?>


  
    
</body>
</html>