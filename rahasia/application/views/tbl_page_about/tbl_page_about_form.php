<link rel="stylesheet" media="screen, print" href="<?php echo base_url() ?>assets/smartadmin/css/formplugins/summernote/summernote.css">
<main id="js-page-content" role="main" class="page-content">
    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>INPUT DATA VISI MISI</h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <form action="<?php echo $action; ?>" method="post">

                            <table class='table table-striped'>


                                <tr>
                                    <td width='200'>Judul<?php echo form_error('about_heading') ?></td>
                                    <td><input type="text" class="form-control" name="about_heading" id="about_heading" placeholder="About Heading" value="<?php echo $about_heading; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Isi <?php echo form_error('about_content') ?></td>
                                    <td><textarea class="form-control" name="about_content" class="js-summernote" id="summernote"><?php echo $about_content; ?></textarea></td>
                                </tr>
                                <tr>
                                    <td width='200'>Mt About <?php echo form_error('mt_about') ?></td>
                                    <td> <textarea class="form-control" non_pks="3" name="mt_about" id="mt_about" placeholder="Mt About"><?php echo $mt_about; ?></textarea></td>
                                </tr>
                                <tr>
                                    <td width='200'>Mk About <?php echo form_error('mk_about') ?></td>
                                    <td><input type="text" class="form-control" name="mk_about" id="mk_about" placeholder="Mk About" value="<?php echo $mk_about; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Md About <?php echo form_error('md_about') ?></td>
                                    <td><input type="text" class="form-control" name="md_about" id="md_about" placeholder="Md About" value="<?php echo $md_about; ?>" /></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="hidden" name="id" value="<?php echo $id; ?>" />
                                        <button type="submit" class="btn btn-warning waves-effect waves-themed"><i class="fal fa-save"></i> <?php echo $button ?></button>
                                        <a href="<?php echo site_url('tbl_page_about') ?>" class="btn btn-info waves-effect waves-themed"><i class="fal fa-sign-out"></i> Kembali</a></td>
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