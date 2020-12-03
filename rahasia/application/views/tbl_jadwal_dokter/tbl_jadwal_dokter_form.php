<main id="js-page-content" role="main" class="page-content">
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>INPUT DATA JADWAL DOKTER</h2>
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
                                    <td width='200'>Tahun <?php echo form_error('tahun') ?></td>
                                    <td><input type="number" class="form-control" name="tahun" id="tahun" placeholder="Tahun" value="<?php echo $tahun; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Bulan <?php echo form_error('bulan') ?></td>
                                    <td><input type="number" class="form-control" name="bulan" id="bulan" placeholder="Bulan" value="<?php echo $bulan; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Id Poli <?php echo form_error('id_poli') ?></td>
                                    <td><?php echo select2_dinamis('id_poli', 'tbl_poli', 'id_poli', 'nm_poli') ?></td>
                                </tr>
                                <tr>
                                    <td width='200'>Senin <?php echo form_error('senin') ?></td>
                                    <td><?php echo select2_dinamis('senin', 'tbl_dokter', 'nm_dokter', 'nm_dokter') ?></td>
                                </tr>
                                <tr>
                                    <td width='200'>Selasa <?php echo form_error('selasa') ?></td>
                                    <td><?php echo select2_dinamis('selasa', 'tbl_dokter', 'nm_dokter', 'nm_dokter') ?></td>
                                </tr>
                                <tr>
                                    <td width='200'>Rabu <?php echo form_error('rabu') ?></td>
                                    <td><?php echo select2_dinamis('rabu', 'tbl_dokter', 'nm_dokter', 'nm_dokter') ?></td>
                                </tr>
                                <tr>
                                    <td width='200'>Kamis <?php echo form_error('kamis') ?></td>
                                    <td><?php echo select2_dinamis('kamis', 'tbl_dokter', 'nm_dokter', 'nm_dokter') ?></td>
                                </tr>
                                <tr>
                                    <td width='200'>Jumat <?php echo form_error('jumat') ?></td>
                                    <td><?php echo select2_dinamis('jumat', 'tbl_dokter', 'nm_dokter', 'nm_dokter') ?></td>
                                </tr>
                                <tr>
                                    <td width='200'>Sabtu <?php echo form_error('sabtu') ?></td>
                                    <td><?php echo select2_dinamis('sabtu', 'tbl_dokter', 'nm_dokter', 'nm_dokter') ?></td>
                                </tr>
                                <tr>
                                    <td width='200'>Minggu <?php echo form_error('minggu') ?></td>
                                    <td><?php echo select2_dinamis('minggu', 'tbl_dokter', 'nm_dokter', 'nm_dokter') ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="hidden" name="id" value="<?php echo $id; ?>" />
                                        <button type="submit" class="btn btn-warning waves-effect waves-themed"><i class="fal fa-save"></i> <?php echo $button ?></button>
                                        <a href="<?php echo site_url('tbl_jadwal_dokter') ?>" class="btn btn-info waves-effect waves-themed"><i class="fal fa-sign-out"></i> Kembali</a></td>
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