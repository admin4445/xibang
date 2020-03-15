    
    <?php $this->load->view('header'); ?>
    <style>
        .lianxi  img{
            border:none;
            transition: all ease-in-out .2s;
            overflow: hidden;
        }
        .lianxi img:hover{
            transform: scale(.95)
        }
    </style>
    <link rel="stylesheet" href="<?php echo base_url('./static/home/css/') ?>index.css">
    <!--喜邦品牌-->
    <div class="brand chanye">
        <div class="container  lianxi">
                <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
                    <img src="<?php echo base_url('./static/home/images/') ?>title_bg.png" alt="">
                    <p class="brand-title"><?php echo $type[0]['type_name'] ?></p>
                    <p class="brand-conent"><?php echo $type[0]['type_ename'] ?></p>
                   
                </div>
             
        </div>
    </div>
    <!--brands--->

    <?php foreach($industry as $item){ ?>
    <div class="brands chanye">
        <div class="container lianxi">
                <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
                
                    <img src="<?php echo base_url($item['industry_img']) ?>" alt="" class="brands-text"><span class="chuanyi"><?php echo $item['industry_name'] ?></span>
                </div>
                <div class="col-lg-7 col-sm-7 col-md-7 col-xs-12" class="content">
                        <p class="brands-title"><?php echo $item['industry_title'] ?></p>
                        <p class="brands-content"><?php echo $item['industry_edesc'] ?></p>
                </div>
        </div>
    </div>
    <?php } ?>
    
    
    <!--我们最近做的作品-->
    <div class="ower">
        <div class="container lianxi">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-8"> 
                  <img src="<?php echo base_url('./static/home/images/') ?>title_bg.png" alt="" class="">
                  <p class="brand-title"><?php echo $type[1]['type_name'] ?></p>
                  <p class="brand-conent"><?php echo $type[1]['type_ename'] ?></p>
            </div> 
           <div class="col-md-6 col-sm-6 col-lg-6 col-xs-4">
                <p class="ower-title"><span><a href="#">近期作品</a></span><span class="hidden-xs"><a href="#">全部作品</a></span></p>
           </div>

        </div>
       
        <div class="container lianxi" >
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12"> 
              <img src="<?php echo base_url($case[0]['case_img']) ?>" alt="" class="img-responsive">
            </div> 
           <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
                <div class="aidian">
                    <p class="aidian-title"><b><?php echo $case[0]['case_name']; ?></b></p>
                    <p class="aidian-content"><?php echo $case[0]['case_desc']; ?></p>
                    <img src="<?php echo base_url('./static/home/images/') ?>index/index_07-07.jpg" alt="">
                </div>
               
           </div>
           
        </div>
        <div class="container">
          <div class="aidian-more col-md-12 col-sm-12 col-lg-12 col-xs-12">
             <a href="#" ><b>MORE</b></a>
          </div>
        </div>
    </div>
    <!--资深专家-->
    <div class="zisheng" >
        <div class="container lianxi">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-8"> 
                  <img src="<?php echo base_url('./static/home/images/') ?>title_bg.png" alt="" >
                  <p class="brand-title"><?php echo $type[3]['type_name'] ?></p>
                  <p class="brand-conent"><?php echo $type[3]['type_ename'] ?></p>
            </div> 
           <div class="col-md-6 col-sm-6 col-lg-6 col-xs-4">
                <p class="ower-title"><span><a href="#">精英团队</a></span><span class="hidden-xs"><a href="#">全部团队</a></span></p>
           </div>

        </div>
        <div class="container lianxi" >
            <?php foreach($team as $key=>$item){ ?>
                <?php  if($key==4){

              }else{ ?>
               
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6" >
                    <a  onmouseover="texts(<?php echo $item['team_id'] ?>)">
                        <img src="<?php echo base_url($item['team_thumb']); ?>" alt="" class="img-responsive zisheng-img">
                    </a>
                </div>
              <?php } ?>
            <?php } ?>
            <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6" >
                <a onmouseover="texts(2)">
                    <img src="<?php// echo base_url('./static/home/images/') ?>index/01.jpg" alt="" class="img-responsive zisheng-img">
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6" >
                <a onmouseover="texts(3)">
                    <img src="<?php //echo base_url('./static/home/images/') ?>index/01.jpg" alt="" class="img-responsive zisheng-img">
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6" >
                <a onmouseover="texts(4)">
                    <img src="<?php //echo base_url('./static/home/images/') ?>index/01.jpg" alt="" class="img-responsive zisheng-img">
                </a>
            </div> -->
           
           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a  onmouseover="texts(<?php echo $team[4]['team_id'] ?>)">
                            <img src="<?php echo base_url($team[4]['team_thumb']); ?>" alt="" class="img-responsive zisheng-img">
                        </a>
                    </div>
                   
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        
                        <p class="zisheng-name" id="name"><?php echo $team[0]['team_name'] ?></p>
                        <p class="zisheng-Occupation" id="position"><?php echo $team[0]['team_position'] ?></p>
                        <p class="zisheng-desc" id="school"><?php echo $team[0]['team_School']  ?></p>
                        <img src="<?php echo base_url('./static/home/images/') ?>index/index_07-07.png" alt="" class="img-responsive">
                    </div>
              </div>
           </div>
           
        </div>
        <div class="container">
          <div class="aidian-more col-md-12 col-sm-12 col-lg-12 col-xs-12">
             <a href="#" ><b>MORE</b></a>
          </div>
        </div>
    </div>
    <!--最新资讯-->
    <div class="zixun" >
        <div class="container lianxi">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-8"> 
                  <img src="<?php echo base_url('./static/home/images/') ?>title_bg.png" alt="" >
                  <p class="brand-title"><?php echo $type[2]['type_name'] ?></p>
                  <p class="brand-conent"><?php echo $type[2]['type_ename'] ?></p>
            </div> 
           <div class="col-md-6 col-sm-6 col-lg-6 col-xs-4">
                <p class="ower-title"><span><a href="#">化妆品新闻</a></span><span class="hidden-xs"><a href="#">公司新闻</a></span></p>
           </div>
        </div>
        <?php foreach($news as $key=>$item){ ?>
            <div style="padding: 30px 0px;">
                <div class="container "  id="<?php echo 'meu'.$key.'b'; ?>"  style="background-color: rgb(247, 247, 247);width:100%;padding:25px;">
                    <div class="col-md-6 col-sm-6 col-lg-4 col-lg-offset-1">
                        <img src="<?php echo base_url($item['news_img']) ?>" alt="" class="img-responsive center-block">
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 ">
                        <p class="zixun-title" ><b><?php echo $item['news_title'] ?></b></p>
                        <p class="zixun-time"><?php echo date('Y-m-d H:i:s',$item['news_time']) ?></p>
                        <p class="zixun-content"><?php echo $item['news_content'] ?></p>
                       
                    </div>
                </div>
            </div>
            <div style="">
            
            <div class="container zi-xun " id="<?php echo 'meu'.$key; ?>" >
                <div class="col-md-6 col-sm-6 col-lg-3 col-lg-offset-1">
                    
                  
                    <img src="<?php echo base_url($item['news_img']) ?>" alt="" class="img-responsive center-block" >
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 ">
                    <h4 class="h-title"><?php echo $item['news_title'] ?></h4>
                    <p class="h-content"><?php echo $item['news_content'] ?></p>
                </div>
            </div>
            </div>
        <?php } ?>
        <div class="container">
          <div class="aidian-more col-md-12 col-sm-12 col-lg-12 col-xs-12">
             <a href="#" ><b>MORE</b></a>
          </div>
        </div>
    </div>

    <!--footer-->
    <?php $this->load->view('footer') ?>
    <script src="<?php echo base_url('./static/home/js/') ?>index.js"></script>
</body>
<script>
    function texts(data){
      

        //实列化 xmlhttprequest
        if(window.XMLHttpRequest){
                 var xhr = new XMLHttpRequest();
             }else if(window.ActiveXObject){
                 var xhr = new ActiveXObject("Microsoft.XMLHTTP");
             }
             //创建一个请求
             xhr.open('GET','/index.php/Home/getteam/id/'+data,true);
             //发送请求
             xhr.send();
             //捕获请求状态
             xhr.onreadystatechange = function () {
                 //判断请求状态
                 if(xhr.readyState == 4){
                     //判断请求结果
                     if(xhr.status==200){
                       
                        var obj  = JSON.parse(xhr.responseText);4
                          document.getElementById('name').innerHTML=obj.team_name;
                          document.getElementById('position').innerHTML=obj.team_position;
                          document.getElementById('school').innerHTML=obj.team_School;
                       
                       
                     }
                 }
             }
    }
</script>
</html>
