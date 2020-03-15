    <?php $this->load->view('admin/header'); ?>
    <!-- End: Sidebar -->
    <!-- Start: Content -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('./static/admin/css/') ?>bootstrap-fileinput.css">
    <section id="content">
        <div id="topbar" class="affix">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">修改联系我们</li>
            </ol>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-10 col-lg-8 center-column">
                    <form action="<?php echo site_url('admin/Contact/edit') ?>" method="post" class="cmxform" enctype="multipart/form-data">
                    <input type="hidden" name="contact_id" value="<?php echo  $info['contact_id']; ?>" class="form-control">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">修改联系我们</div>
                                <div class="panel-btns pull-right margin-left">
                                    <a href="<?php echo site_url('admin/Contact/index') ?>"
                                       class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">公司全称</span>
                                            <input type="text" name="contact_name" value="<?php echo  $info['contact_name']; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">英文全称</span>
                                            <input type="text" name="contact_ename" value="<?php echo  $info['contact_ename']; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">联系电话</span>
                                            <input type="text" name="contact_service_tel" value="<?php echo  $info['contact_service_tel']; ?>" class="form-control">
                                        </div>
                                    </div>
                                   
                                    
                                </div>
                                <div class="form-group col-md-12">
                                    <script type="text/plain" id="myEditor" style="width:100%;height:200px;">
                                    <?php echo  $info['contacr_desc']; ?>
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
