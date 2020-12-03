<main id="js-page-content" role="main" class="page-content">
    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>INPUT DATA HOME</h2>
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
                                    <td width='200'>Layanan Unggulan 1 Judul <?php echo form_error('counter_1_value') ?></td>
                                    <td><input type="text" class="form-control" name="counter_1_value" id="counter_1_value" placeholder="Counter 1 Value" value="<?php echo $counter_1_value; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Layanan Unggulan 1 Deskripsi<?php echo form_error('counter_1_title') ?></td>
                                    <td><input type="text" class="form-control" name="counter_1_title" id="counter_1_title" placeholder="Counter 1 Title" value="<?php echo $counter_1_title; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Layanan Unggulan 2 Judul <?php echo form_error('counter_2_value') ?></td>
                                    <td><input type="text" class="form-control" name="counter_2_value" id="counter_2_value" placeholder="Counter 2 Value" value="<?php echo $counter_2_value; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Layanan Unggulan 2 Deskripsi<?php echo form_error('counter_2_title') ?></td>
                                    <td><input type="text" class="form-control" name="counter_2_title" id="counter_2_title" placeholder="Counter 2 Title" value="<?php echo $counter_2_title; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Layanan Unggulan 3 Judul <?php echo form_error('counter_3_value') ?></td>
                                    <td><input type="text" class="form-control" name="counter_3_value" id="counter_3_value" placeholder="Counter 3 Value" value="<?php echo $counter_3_value; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Layanan Unggulan 3 Deskripsi<?php echo form_error('counter_3_title') ?></td>
                                    <td><input type="text" class="form-control" name="counter_3_title" id="counter_3_title" placeholder="Counter 3 Title" value="<?php echo $counter_3_title; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Layanan Unggulan 4 Judul <?php echo form_error('counter_4_value') ?></td>
                                    <td><input type="text" class="form-control" name="counter_4_value" id="counter_4_value" placeholder="Counter 4 Value" value="<?php echo $counter_4_value; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Layanan Unggulan 4 Deskripsi<?php echo form_error('counter_4_title') ?></td>
                                    <td><input type="text" class="form-control" name="counter_4_title" id="counter_4_title" placeholder="Counter 4 Title" value="<?php echo $counter_4_title; ?>" /></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td><input type="hidden" name="id" value="<?php echo $id; ?>" />
                                        <button type="submit" class="btn btn-warning waves-effect waves-themed"><i class="fal fa-save"></i> <?php echo $button ?></button>
                                        <a href="<?php echo site_url('tbl_page_home') ?>" class="btn btn-info waves-effect waves-themed"><i class="fal fa-sign-out"></i> Kembali</a></td>
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