<main id="js-page-content" role="main" class="page-content">
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>Profil Direksi Read</h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
        <table class="table table-striped">
	    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
	    <tr><td>Designation</td><td><?php echo $designation; ?></td></tr>
	    <tr><td>Photo</td><td><?php echo $photo; ?></td></tr>
	    <tr><td>Detail</td><td><?php echo $detail; ?></td></tr>
	    <tr><td>Facebook</td><td><?php echo $facebook; ?></td></tr>
	    <tr><td>Twitter</td><td><?php echo $twitter; ?></td></tr>
	    <tr><td>Linkedin</td><td><?php echo $linkedin; ?></td></tr>
	    <tr><td>Youtube</td><td><?php echo $youtube; ?></td></tr>
	    <tr><td>Google Plus</td><td><?php echo $google_plus; ?></td></tr>
	    <tr><td>Instagram</td><td><?php echo $instagram; ?></td></tr>
	    <tr><td>Flickr</td><td><?php echo $flickr; ?></td></tr>
	    <tr><td>Phone</td><td><?php echo $phone; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Website</td><td><?php echo $website; ?></td></tr>
	    <tr><td>Meta Title</td><td><?php echo $meta_title; ?></td></tr>
	    <tr><td>Meta Keyword</td><td><?php echo $meta_keyword; ?></td></tr>
	    <tr><td>Meta Description</td><td><?php echo $meta_description; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tbl_team_member') ?>" class="btn btn-primary waves-effect waves-themed">Kembali</a></td></tr>
	</table>
</div>
</div>

            </div>
        </div>
    </div>
</main>
<script src="<?php echo base_url() ?>assets/smartadmin/js/vendors.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/app.bundle.js"></script>