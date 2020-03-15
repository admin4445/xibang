     
    <?php $this->load->view('header'); ?>
    <link rel="stylesheet" href="<?php  echo base_url('static/home/css/')?>xinwen.css">
    <!--当前所在位置-->
    <div class="container lianxi">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
            <p style="text-align: right;padding: 20px 0px;color: lightgrey;">所在位置：<span>资讯></span>
            <?php if($newsadd==""||$newsadd==0){ ?>
                <span>全部新闻</span>
            <?php }else{ ?>
                <?php foreach($typeinfo as $item){ ?>
                <span><?php if($newsadd==$item['news_type_id']){echo $item['news_name'];} ?></span>
                <?php } ?>
            <?php } ?>
        </p>
            
        </div>
    </div>
    <!--选项卡-->
    <div class="xuanxiang container ">
        <div class="col-lg-1">

        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2">
                <a href="<?php echo site_url('News/index/0')?>" class="<?php if($tid==0){echo "actives";} ?>"><span style="<?php if($newsadd==""||$newsadd==0){echo "color: rgb(206, 37, 31);
           border-bottom: 2px rgb(206, 37, 31) solid;
           padding: 5px 0px;";} ?>">全部新闻</span></a>
        </div>
        <?php foreach($typeinfo as $item){ ?>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2">
                <a href="<?php echo site_url('News/index/').$item['news_type_id'] ?>" class="<?php if($tid==$item['news_type_id']){echo "actives";} ?>"><span style="<?php if($newsadd==$item['news_type_id']){echo "color: rgb(206, 37, 31);
           border-bottom: 2px rgb(206, 37, 31) solid;
           padding: 5px 0px;";} ?>"> <?php echo $item['news_name'] ?></span></a>
        </div>
        <?php } ?>
        <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2">
                <a><span>公司新闻</span></a>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2">
            <a><span>行业新闻</span></a>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2">
            <a><span>项目动态</span></a>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2">
            <a><span>最新资讯</span></a>
        </div> -->
        <div class="col-lg-1">

        </div>
    </div>
    
    <!--新闻展示-->
    <div class="container lianxi">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"> 
          
            <img src="<?php echo base_url('static/home/images/') ?>title_bg.png" alt="" >
            <p class="brand-title">新闻展示</p>
      </div> 
    </div>
    <div class="container anlie lianxi">

        <?php foreach($newsinfo as $item){ ?>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12 boxs" style=" margin-bottom: 20px;">
            <p class="time"><?php echo  date('d',$item['news_time']) ?><span class="year"><?php echo date('Y-m',$item['news_time']) ?></span></p>
            <a href="<?php echo site_url('News/show/').$tid.'/'.$item['news_id'] ?>"><img src="<?php echo base_url('static/home/images/') ?>case_detail/case_detail_7.jpg" alt="" class="img-responsive"></a> 
            <p class="anlie-title"><b><?php echo $item['news_title'] ?></b></p>
            <p class="anlie-content">
               <?php echo $item['news_content'] ?>
            </p>
        </div>
        <?php } ?>
    </div>
    <!-- <div class="container anlie lianxi">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
            <p class="time">15<span class="year">2019-09</span></p>
            <img src="<?php echo base_url('static/home/images/') ?>case_detail/case_list_06.png" alt="" class="img-responsive">
            <p class="anlie-title"><b>本土日化.上市需要等待时机</b></p>
            <p class="anlie-content">
                日化企业的上市会给企业带来更为广阔的利润空间,而上市过程也
                需要很多的资金,但是很多本士的日化企业尽管具有一定的经济实却...
            </p>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
            <p class="time">22<span class="year">2019-10</span></p>
            <img src="<?php echo base_url('static/home/images/') ?>case_detail/case_list_07.png" alt="" class="img-responsive">
            <p class="anlie-title"><b>中国拟规定化妆品生产企业需建立全过程可追溯制度</b></p>
            <p class="anlie-content">
                国家食品药品监管总局17日就《化妆品生产许可工作指南(暂行)》和《化妆品生产许可检查要点(暂行)》公开征求意见。其中,检查...
            </p>
        </div>

    </div>
    <div class="container anlie lianxi">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
            <p class="time">27<span class="year">2019-11</span></p>
            <img src="<?php echo base_url('static/home/images/') ?>case_detail/case_list_08.png" alt="" class="img-responsive">
            <p class="anlie-title"><b>天猫启动”满天星”计划500万化妆品可追溯真假</b></p>
            <p class="anlie-content">
                3月16日,天猫宣布, 41家国内外知名化妆品品牌加入天猫美妆”
                “计划。第- -期500万件通过天猫销售的化妆品都会印上二维码身份证...
            </p>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
            <p class="time">21<span class="year">2019-12</span></p>
            <img src="<?php echo base_url('static/home/images/') ?>case_detail/case_list_09.png" alt="" class="img-responsive">
            <p class="anlie-title"><b>本土日化.上市需要等待时机</b></p>
            <p class="anlie-content">
                日化企业的.上市会给企业带来更为广阔的利润空间,而上市过程也很多的资金,但是很多本土的日化企业尽管具有...
            </p>
        </div>

    </div> -->
    <!--分页-->
    <div class="container">
        <div class="col-lg-6  col-md-offset-4 col-xs-offset-1">
                <!-- <ul class="page-limit ">
                    <li><a >上一页</a></li>
                    <li><a class="actives">1</a></li>
                    <li><a>2</a></li>
                    <li><a>3</a></li>
                    <li><a>上一页</a></li>
                </ul> -->
                <?php  echo $page;?>
        </div>
    </div>
   

    <!--footer  -->
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