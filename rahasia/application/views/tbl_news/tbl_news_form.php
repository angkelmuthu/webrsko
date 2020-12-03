<link rel="stylesheet" media="screen, print" href="<?php echo base_url() ?>assets/smartadmin/css/formplugins/summernote/summernote.css">
<main id="js-page-content" role="main" class="page-content">
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>INPUT DATA ARTIKEL</h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">

                            <table class='table table-striped'>


                                <tr>
                                    <td width='200'>Judul Artikel <?php echo form_error('news_title') ?></td>
                                    <td><input type="text" class="form-control" name="news_title" id="news_title" placeholder="News Title" value="<?php echo $news_title; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Sub Judul Artikel <?php echo form_error('news_content_short') ?></td>
                                    <td><input type="text" class="form-control" name="news_content_short" id="news_content_short" placeholder="News Content Short" value="<?php echo $news_content_short; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Konten/Isi</td> <?php echo form_error('news_content') ?></td>
                                    <td> <textarea class="form-control" name="news_content" class="js-summernote" id="summernote"><?php echo $news_content; ?></textarea></td>
                                </tr>
                                <tr>
                                    <td width='200'>Photo <?php echo form_error('photo') ?></td>
                                    <td><input type="file" class="form-control" name="photo" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Category Id <?php echo form_error('category_id') ?></td>
                                    <td><?php echo cmb_dinamis('category_id', 'tbl_category', 'category_id', 'category_name') ?></td>
                                </tr>
                                <tr>
                                    <td width='200'>Meta Title <?php echo form_error('meta_title') ?></td>
                                    <td><input type="text" class="form-control" name="meta_title" id="meta_title" placeholder="Meta Title" value="<?php echo $meta_title; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Meta Keyword <?php echo form_error('meta_keyword') ?></td>
                                    <td><input type="text" class="form-control" name="meta_keyword" id="meta_keyword" placeholder="Meta Keyword" value="<?php echo $meta_keyword; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Meta Description <?php echo form_error('meta_description') ?></td>
                                    <td> <textarea class="form-control" non_pks="3" name="meta_description" id="meta_description" placeholder="Meta Description"><?php echo $meta_description; ?></textarea></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <input type="hidden" name="news_date" value="<?php echo date('Y-m-d'); ?>" />
                                        <input type="hidden" name="comment" value="vai" />
                                        <input type="hidden" name="news_id" value="<?php echo $news_id; ?>" />
                                        <button type="submit" class="btn btn-warning waves-effect waves-themed"><i class="fal fa-save"></i> <?php echo $button ?></button>
                                        <a href="<?php echo site_url('tbl_news') ?>" class="btn btn-info waves-effect waves-themed"><i class="fal fa-sign-out"></i> Kembali</a></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<script src="<?php echo base_url() ?>assets/smartadmin/js/vendors.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/app.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/formplugins/select2/select2.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/kostum.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/formplugins/summernote/summernote.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#summernote').summernote({
            height: "300px",
            callbacks: {
                onImageUpload: function(image) {
                    uploadImage(image[0]);
                },
                onMediaDelete: function(target) {
                    deleteImage(target[0].src);
                }
            }
        });
    });
</script>