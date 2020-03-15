     
    <?php $this->load->view('header'); ?>
    <link rel="stylesheet" href="<?php  echo base_url('static/home/css/')?>lianxi.css">
    <!--当前所在位置-->
    <div class="container positions">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
            <p style="text-align: right;">所在位置：<span>联系</span></p>
            
        </div>
    </div>
     <!--选项卡-->
     <div class="xuanxiang container">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="#a01"><span>联系我们</span></a>
                </div>
                  
                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-6">
                    <a href="#a02"><span>地图位置</span></a>
                </div>
              
            </div>
        </div>
        <div class="col-lg-8 col-sm-8 col-md-8  hidden-xs">
          
        </div>
       
    </div>
    <!--联系我们-->
    <div class="container lianxi" id="a01">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"> 
            <img src="<?php echo base_url('static/home/images/') ?>title_bg.png" alt="" class="img-responsive title_bg "  >
            <p class="brand-title">联系我们</p>
            <p class="brand-conent">欢迎您致电“喜邦品牌”进行咨询,我们即将为您全心全意的服务</p>
      </div> 
      <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <div class="guanbang col-md-6 col-sm-6 col-lg-6 col-xs-12">
                <p class="guanbang-title"><b><?php echo $info['contact_name'] ?></b></p>
                <p class="guanbang-content"><?php echo $info['contact_ename'] ?></p>
                <p class="guanban-tel"><b>服务专线: <?php echo $info['contact_service_tel'] ?></b></p>
            </div>
            <div class=" tel col-md-6 col-sm-6 col-lg-6 col-xs-12">
                <!-- <p>小时咨询电话: 13049685204 13580317549</p>
                <p>E-mail: 758057640@qq.com</p>
                <p>QQ: 758057640</p>
                <p>公司地址:广州市白云区新市齐富路联富大厦6018</p> -->
                <?php echo htmlspecialchars_decode($info['contacr_desc']) ?>
            </div>
      </div>
    </div>
    <div class="container lianxi" style="margin-top: 20px;" >
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"> 
            <img src="<?php echo base_url('static/home/images/') ?>title_bg.png" alt="" class="img-responsive title_bg "  >
            <p class="brand-title" id="a02">地理位置</p>
            <p class="brand-conent">为了您跟我们更加快捷找到我们公司地址,请用地图查找我们的位置，多谢!</p>
      </div> 
      <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12" style="margin-bottom: 60px;" >
           
            <div id="tmp" style="width:960px;height:400px;"></div>
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

  <script src="https://webapi.amap.com/maps?v=1.4.15&key=您申请的key值"></script>
  <script src="https://a.amap.com/jsapi_demos/static/demo-center/js/demoutils.js"></script>
  <script>
    var map = map = new AMap.Map('tmp', {
        resizeEnable: true,
        center: [116.397428, 39.90923],
        zoom: 13
    });
    
    var marker = new AMap.Marker({
        position: map.getCenter(),
        icon: '//a.amap.com/jsapi_demos/static/demo-center/icons/poi-marker-default.png',
        offset: new AMap.Pixel(-13, -30)
    });

    marker.setMap(map);

    // 设置鼠标划过点标记显示的文字提示
    marker.setTitle('我是marker的title');

    // 设置label标签
    // label默认蓝框白底左上角显示，样式className为：amap-marker-label
    marker.setLabel({
        offset: new AMap.Pixel(20, 20),  //设置文本标注偏移量
        content: "<div class='info'><h6 style='color:red;'>广州喜邦广告设计有限公司</h6><p>地址：齐富路1~10号联富大厦6号6018<p></div>", //设置文本标注内容
        direction: 'right' //设置文本标注方位
    });
    map.on("complete", function(){
       log.success("地图加载完成！");  
    });
  </script>
  
    
</body>
</html>