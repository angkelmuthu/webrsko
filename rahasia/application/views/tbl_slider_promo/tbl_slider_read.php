<main id="js-page-content" role="main" class="page-content">
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>Promo Read</h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
        <table class="table table-striped">
	    <tr><td>Photo</td><td><?php echo $photo; ?></td></tr>
	    <tr><td>Heading</td><td><?php echo $heading; ?></td></tr>
	    <tr><td>Content</td><td><?php echo $content; ?></td></tr>
	    <tr><td>Button1 Text</td><td><?php echo $button1_text; ?></td></tr>
	    <tr><td>Button1 Url</td><td><?php echo $button1_url; ?></td></tr>
	    <tr><td>Button2 Text</td><td><?php echo $button2_text; ?></td></tr>
	    <tr><td>Button2 Url</td><td><?php echo $button2_url; ?></td></tr>
	    <tr><td>Position</td><td><?php echo $position; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tbl_slider_promo') ?>" class="btn btn-primary waves-effect waves-themed">Kembali</a></td></tr>
	</table>
</div>
</div>

            </div>
        </div>
    </div>
</main>
<script src="<?php echo base_url() ?>assets/smartadmin/js/vendors.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/app.bundle.js"></script>