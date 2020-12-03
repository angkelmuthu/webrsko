<main id="js-page-content" role="main" class="page-content">
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>Sejarah Read</h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
        <table class="table table-striped">
	    <tr><td>Sejarah Heading</td><td><?php echo $sejarah_heading; ?></td></tr>
	    <tr><td>Sejarah Content</td><td><?php echo $sejarah_content; ?></td></tr>
	    <tr><td>Mt Sejarah</td><td><?php echo $mt_sejarah; ?></td></tr>
	    <tr><td>Mk Sejarah</td><td><?php echo $mk_sejarah; ?></td></tr>
	    <tr><td>Md Sejarah</td><td><?php echo $md_sejarah; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tbl_page_sejarah') ?>" class="btn btn-primary waves-effect waves-themed">Kembali</a></td></tr>
	</table>
</div>
</div>

            </div>
        </div>
    </div>
</main>
<script src="<?php echo base_url() ?>assets/smartadmin/js/vendors.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/app.bundle.js"></script>