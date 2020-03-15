    <?php $this->load->view('admin/header') ?>
    <!DOCTYPE html>

    <!-- End: Sidebar -->
    <!-- Start: Content -->
    <section id="content">
        <div id="topbar" class="affix">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">修改新闻分类</li>
            </ol>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-10 col-lg-8 center-column">
                    <form action="<?php site_url('admin/Newtype/edit') ?>" method="post" class="cmxform">
                        <input type="hidden" name="news_type_id" value="<?php echo $info['news_type_id']; ?>" class="form-control">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">修改新闻分类</div>
                                <div class="panel-btns pull-right margin-left">
                                    <a href="<?php echo site_url('admin/Newtype/index') ?>"
                                       class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">分类名称</span>
                                            <input type="text" name="news_name" value="<?php echo $info['news_name']; ?>" class="form-control">
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

</body>

</html>