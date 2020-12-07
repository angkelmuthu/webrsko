<main id="js-page-content" role="main" class="page-content">
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>INPUT DATA PROMO</h2>
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
                                    <td width='200'>Gambar Promo <?php echo form_error('photo') ?></td>
                                    <td><input type="file" class="form-control" name="photo" value="<?php echo $photo; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Judul <?php echo form_error('heading') ?></td>
                                    <td><input type="text" class="form-control" name="heading" id="heading" placeholder="Heading" value="<?php echo $heading; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Content <?php echo form_error('content') ?></td>
                                    <td><textarea class="form-control" name="content" id="content" placeholder="Content" rows="3"><?php echo $content; ?></textarea></td>
                                </tr>
                                <!-- <tr>
                                    <td width='200'>Button1 Text <?php echo form_error('button1_text') ?></td>
                                    <td><input type="text" class="form-control" name="button1_text" id="button1_text" placeholder="Button1 Text" value="<?php echo $button1_text; ?>" /></td>
                                </tr> -->
                                <tr>
                                    <td width='200'>Url <?php echo form_error('button1_url') ?></td>
                                    <td><input type="text" class="form-control" name="button1_url" id="button1_url" placeholder="Button1 Url" value="<?php echo $button1_url; ?>" /></td>
                                </tr>
                                <!-- <tr>
                                    <td width='200'>Button2 Text <?php echo form_error('button2_text') ?></td>
                                    <td><input type="text" class="form-control" name="button2_text" id="button2_text" placeholder="Button2 Text" value="<?php echo $button2_text; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Button2 Url <?php echo form_error('button2_url') ?></td>
                                    <td><input type="text" class="form-control" name="button2_url" id="button2_url" placeholder="Button2 Url" value="<?php echo $button2_url; ?>" /></td>
                                </tr> -->
                                <tr>
                                    <td></td>
                                    <td><input type="hidden" name="id" value="<?php echo $id; ?>" />
                                        <input type="hidden" name="position" value="promo" />
                                        <button type="submit" class="btn btn-warning waves-effect waves-themed"><i class="fal fa-save"></i> <?php echo $button ?></button>
                                        <a href="<?php echo site_url('tbl_slider') ?>" class="btn btn-info waves-effect waves-themed"><i class="fal fa-sign-out"></i> Kembali</a></td>
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