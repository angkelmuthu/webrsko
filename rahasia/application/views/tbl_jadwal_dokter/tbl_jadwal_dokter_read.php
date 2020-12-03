<main id="js-page-content" role="main" class="page-content">
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>Jadwal Dokter Read</h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
        <table class="table table-striped">
	    <tr><td>Tahun</td><td><?php echo $tahun; ?></td></tr>
	    <tr><td>Bulan</td><td><?php echo $bulan; ?></td></tr>
	    <tr><td>Id Poli</td><td><?php echo $id_poli; ?></td></tr>
	    <tr><td>Senin</td><td><?php echo $senin; ?></td></tr>
	    <tr><td>Selasa</td><td><?php echo $selasa; ?></td></tr>
	    <tr><td>Rabu</td><td><?php echo $rabu; ?></td></tr>
	    <tr><td>Kamis</td><td><?php echo $kamis; ?></td></tr>
	    <tr><td>Jumat</td><td><?php echo $jumat; ?></td></tr>
	    <tr><td>Sabtu</td><td><?php echo $sabtu; ?></td></tr>
	    <tr><td>Minggu</td><td><?php echo $minggu; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tbl_jadwal_dokter') ?>" class="btn btn-primary waves-effect waves-themed">Kembali</a></td></tr>
	</table>
</div>
</div>

            </div>
        </div>
    </div>
</main>
<script src="<?php echo base_url() ?>assets/smartadmin/js/vendors.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/app.bundle.js"></script>