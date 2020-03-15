    <?php $this->load->view('admin/header') ?>
    <!DOCTYPE html>

    <!-- End: Sidebar -->
    <!-- Start: Content -->
    <section id="content">
        <div id="topbar" class="affix">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">修改网站配置</li>
            </ol>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-10 col-lg-8 center-column">
                    <form action="<?php echo site_url('admin/Conf/edit') ?>" method="post" class="cmxform">
                    <input type="hidden" name="conf_id" value="<?php echo $info['conf_id'] ?>" class="form-control">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">修改网站配置</div>
                                <div class="panel-btns pull-right margin-left">
                                    <a href="<?php echo site_url('admin/Conf/index') ?>"
                                       class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">公司名称</span>
                                            <input type="text" name="conf_name" value="<?php echo $info['conf_name'] ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">公司版权</span>
                                            <input type="text" name="conf_copy" value="<?php echo $info['conf_copy'] ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">公司邮箱地址</span>
                                            <input type="text" name="conf_email" value="<?php echo $info['conf_email'] ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">公司联系电话</span>
                                            <input type="text" name="conf_tel" value="<?php echo $info['conf_tel'] ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">公司地址</span>
                                            <input type="text" name="conf_add" value="<?php echo $info['conf_add'] ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="submit" name="sub" value="提交" class="submit btn btn-blue">
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
<link type="text/css" rel="stylesheet" href="<?php echo base_url('static/home/umeditor/') ?>themes/default/_css/umeditor.css">
<script src="<?php echo base_url('static/home/umeditor/') ?>umeditor.config.js" type="text/javascript"></script>
<script src="<?php echo base_url('static/home/umeditor/') ?>editor_api.js" type="text/javascript"></script>
<script src="<?php echo base_url('static/home/umeditor/') ?>lang/zh-cn/zh-cn.js" type="text/javascript"></script>
<script type="text/javascript">
    var ue = UM.getEditor('myEditor', {
        autoClearinitialContent: true,
        wordCount: false,
        elementPathEnabled: false,
        initialFrameHeight: 300
    });
</script>
</body>

</html>