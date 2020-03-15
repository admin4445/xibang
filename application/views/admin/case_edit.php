    <?php $this->load->view('admin/header'); ?>
    <!-- End: Sidebar -->
    <!-- Start: Content -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('./static/admin/css/') ?>bootstrap-fileinput.css">
    <section id="content">
        <div id="topbar" class="affix">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">编辑案例</li>
            </ol>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-10 col-lg-8 center-column">
                    <form action="<?php echo site_url('admin/Cases/edit') ?>" method="post" class="cmxform" enctype="multipart/form-data">
                    <input type="hidden" name="case_id" value="<?php echo $info['case_id'] ?>" class="form-control">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">编辑案例</div>
                                <div class="panel-btns pull-right margin-left">
                                    <a href="<?php echo site_url('admin/Cases/index') ?>"
                                       class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">名称</span>
                                            <input type="text" name="case_name" value="<?php echo $info['case_name'] ?>" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">分类</span>
                                            <select name="case_type_id" id="standard-list1" class="form-control">
                                               <?php foreach($casetype as $item){ ?>
                                                <option value="<?php echo $item['case_type_id'] ?>" <?php if($info['case_type_id']==$item['case_type_id']){echo "selected='true'";} ?>><?php  echo $item['case_type_name']?></option>

                                               <?php } ?>>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                       
                                       <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                           <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                               <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="<?php echo base_url($info['case_img']) ?>" alt="" />
                                           </div>
                                           <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                           <div>
                                               <span class="btn btn-primary btn-file">
                                                   <span class="fileinput-new">选择文件</span>
                                                   <span class="fileinput-exists">换一张</span>
                                                   <input type="file" name="img" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                               </span>
                                               <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                           </div>
                                       </div>
                                    </div>
                                   
                                </div>
                                <div class="form-group col-md-12">
                                    <script type="text/plain" id="myEditor" style="width:100%;height:200px;">
					                        <p><?php echo $info['case_desc'] ?></p>
                                    </script>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="submit" value="提交" name="sub" class="submit btn btn-blue">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <!-- End: Content -->
</div>
<!-- End: Main -->
<script src="<?php echo base_url('/static/admin/js/') ?>bootstrap-fileinput.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="<?php echo base_url('/static/admin/umeditor/') ?>themes/default/_css/umeditor.css">
<script src="<?php echo base_url('/static/admin/umeditor/') ?>umeditor.config.js" type="text/javascript"></script>
<script src="<?php echo base_url('/static/admin/umeditor/') ?>editor_api.js" type="text/javascript"></script>
<script src="<?php echo base_url('/static/admin/umeditor/') ?>lang/zh-cn/zh-cn.js" type="text/javascript"></script>
<script type="text/javascript">
    var ue = UM.getEditor('myEditor', {
        autoClearinitialContent: false,
        wordCount: false,
        elementPathEnabled: false,
        initialFrameHeight: 300
    });
</script>
</body>

</html>
