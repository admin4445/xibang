    <?php $this->load->view('header'); ?>
    <link rel="stylesheet" href="<?php  echo base_url('static/home/css/')?>desc.css">
    <!--选项卡-->
    <div class="xuanxiang container ">
        <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a><span>全部作品</span></a>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a><span>设计作品</span></a>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <a><span>面膜设计</span></a>
        </div> -->
        <?php  foreach($casetype as $item){ ?>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="<?php echo site_url('Cases/deail/').$item['case_type_id'] ?>" ><span style="<?php if($newsadd==$item['case_type_id']){echo "color: rgb(206, 37, 31);
           border-bottom: 2px rgb(206, 37, 31) solid;
           padding: 5px 0px;";} ?>"><?php echo $item['case_type_name'] ?></span></a>
            </div>
        <?php } ?>
    </div>
    <!--当前所在位置-->
    <div class="container lianxi">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
            <p>所在位置：<span>案例></span><span>
            <?php if($newsadd==""||$newsadd==0){ ?>
                <span>全部设计</span>
            <?php }else{ ?>
                <?php foreach($casetype as $item){ ?>
                <span><?php if($newsadd==$item['case_type_id']){echo $item['case_type_name'];} ?></span>
                <?php } ?>
            <?php } ?>
            </span></p>
            
        </div>
    </div>
    <!--广告案列-->

    <div class="container lianxi">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"> 
            <img src="<?php  echo base_url('static/home/images/') ?>title_bg.png" alt="" >
            <p class="brand-title">【梵漾】广告案列</p>
      </div> 
    </div>
    
    <div class="container guangao lianxi" >
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
           <img src="<?php  echo base_url($info['case_img']) ?>" alt="" class="center-block img-responsive">
           <p class="guangao-content">
            <?php echo $info['case_desc'] ?>
           </p>
         
        </div>
      
    </div>
    <!--logo设计-->
    <div class="container lianxi">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"> 
            <img src="<?php  echo base_url('static/home/images/') ?>title_bg.png" alt="" >
            <p class="brand-title">LOGO设计</p>
      </div> 
    </div>
    
    <div class="container log lianxi">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <p class="logo-title">一、中文字体设计</p>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <img src="<?php  echo base_url('static/home/images/') ?>case_detail/case_detail02.jpg" alt="" class="center-block img-responsive">
            <p class="logo-content">去掉一些形式，凸显记忆点，选用一款黑体字作为原型，在黑体的基础上采用矩形造字法搭建字体骨骼和结构。</p>
        </div>
    </div>
    <div class="container log lianxi">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <p class="logo-title">二、中英文结合文字体设计</p>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <img src="<?php  echo base_url('static/home/images/') ?>case_detail/case_detail_03.jpg" alt="" class="center-block img-responsive">
            <p class="logo-content">标志的两张组合形式，一中采用笔画的连笔跟英文组合，一种采用中英文横排的方式。</p>
        </div>
    </div>
    <div class="container log">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <p class="logo-title">三、标准英文字体设计</p>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <img src="<?php  echo base_url('static/home/images/') ?>case_detail/case_detail_04.jpg" alt="" class="center-block img-responsive">
            <p class="logo-content">标志的英文采用Copperplate Gothic是Frederic W.Goudy于1901年所创造的字型，虽然它归类为无衬线字体，<br/>
                不过在笔画的尾端有微小的衬线装饰，这种衬线装饰与中文设计相协调，能给好的配合中文字体的造型。</p>
        </div>
    </div>
    <div class="container log">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <p class="logo-title">四、标志设计</p>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <img src="<?php  echo base_url('static/home/images/') ?>case_detail/case_detail_05.jpg" alt="" class="center-block img-responsive">
            
        </div>
    </div>
    <div class="container log">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <p class="logo-title">五、设计成品</p>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <img src="<?php  echo base_url('static/home/images/') ?>case_detail/case_detail_6.jpg" alt="" class="center-block img-responsive">
            
        </div>
    </div>
    <div class="container log">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <p class="logo-title">六、产品延伸展示</p>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <img src="<?php  echo base_url('static/home/images/') ?>case_detail/case_detail_7.jpg" alt="" class="center-block img-responsive ima">
            <img src="<?php  echo base_url('static/home/images/') ?>case_detail/case_detail_8.jpg" alt="" class="center-block img-responsive ima">
            <img src="<?php  echo base_url('static/home/images/') ?>case_detail/case_detail_9.jpg" alt="" class="center-block img-responsive ima">
        </div>
    </div>
        <div class="container page" >
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                <p style="text-align: center;"><?php if($prev){ ?> <a href="<?php echo site_url('Cases/deail/').$newsadd.'/'.$prev; ?>">上一篇</a> <?php } ?>
                <?php if($next){ ?><a href="<?php echo site_url('Cases/deail/').$newsadd.'/'.$next; ?>">下一篇</a><?php } ?>  </p>
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