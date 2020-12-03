<link rel="stylesheet" media="screen, print" href="<?php echo base_url() ?>assets/smartadmin/css/formplugins/summernote/summernote.css">
<main id="js-page-content" role="main" class="page-content">
    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>INPUT DATA SEJARAH</h2>
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
                                    <td width='200'>Sejarah Heading <?php echo form_error('sejarah_heading') ?></td>
                                    <td><input type="text" class="form-control" name="sejarah_heading" id="sejarah_heading" placeholder="Sejarah Heading" value="<?php echo $sejarah_heading; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Sejarah Content <?php echo form_error('sejarah_content') ?></td>
                                    <td> <textarea class="form-control" non_pks="3" name="sejarah_content" class="js-summernote" id="summernote"><?php echo $sejarah_content; ?></textarea></td>
                                </tr>
                                <tr>
                                    <td width='200'>Mt Sejarah <?php echo form_error('mt_sejarah') ?></td>
                                    <td><input type="text" class="form-control" name="mt_sejarah" id="mt_sejarah" placeholder="Mt Sejarah" value="<?php echo $mt_sejarah; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Mk Sejarah <?php echo form_error('mk_sejarah') ?></td>
                                    <td><input type="text" class="form-control" name="mk_sejarah" id="mk_sejarah" placeholder="Mk Sejarah" value="<?php echo $mk_sejarah; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Md Sejarah <?php echo form_error('md_sejarah') ?></td>
                                    <td><input type="text" class="form-control" name="md_sejarah" id="md_sejarah" placeholder="Md Sejarah" value="<?php echo $md_sejarah; ?>" /></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="hidden" name="id" value="<?php echo $id; ?>" />
                                        <button type="submit" class="btn btn-warning waves-effect waves-themed"><i class="fal fa-save"></i> <?php echo $button ?></button>
                                        <a href="<?php echo site_url('tbl_page_sejarah') ?>" class="btn btn-info waves-effect waves-themed"><i class="fal fa-sign-out"></i> Kembali</a></td>
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