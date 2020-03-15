     
    <?php $this->load->view('header'); ?>
    <link rel="stylesheet" href="<?php  echo base_url('static/home/css/')?>lianxi.css">
    <!--当前所在位置-->
    <div class="container positions">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
            <p style="text-align: right;">所在位置：<span>联系></span><span>发送邮件</span></p>
            
        </div>
    </div>
    <div class="container" style="margin-bottom:30px;">
        <form action="<?php echo site_url('Contact/sendemail') ?>" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">收件地址</label>
                <input type="email" name ="address" class="form-control" id="exampleInputEmail1" placeholder="请输入接受者的邮箱地址" readonly value="769347672@qq.com">
            </div>
           
            <div class="form-group">
                <label for="exampleInputPassword1">发送者姓名</label>
                <input type="text" name ="name" class="form-control" id="exampleInputPassword1" placeholder="请输入发送者的名字" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">标题</label>
                <input type="text" name ="title" class="form-control" id="exampleInputEmail1" placeholder="请输入标题" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">内容</label>
                <textarea class="form-control" rows="3" name="desc" placeholder="请输入你想发送内容" required></textarea>
            </div>

           
            <!-- <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="checkbox">
                <label>
                <input type="checkbox"> Check me out
                </label>
            </div> -->
            <button type="submit" class="btn btn-warning" name="sub" >发送邮件</button>
        </form>
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