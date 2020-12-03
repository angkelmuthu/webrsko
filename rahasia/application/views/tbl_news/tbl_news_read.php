<main id="js-page-content" role="main" class="page-content">
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>Artikel Read</h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
        <table class="table table-striped">
	    <tr><td>News Title</td><td><?php echo $news_title; ?></td></tr>
	    <tr><td>News Content</td><td><?php echo $news_content; ?></td></tr>
	    <tr><td>News Content Short</td><td><?php echo $news_content_short; ?></td></tr>
	    <tr><td>News Date</td><td><?php echo $news_date; ?></td></tr>
	    <tr><td>Photo</td><td><?php echo $photo; ?></td></tr>
	    <tr><td>Banner</td><td><?php echo $banner; ?></td></tr>
	    <tr><td>Category Id</td><td><?php echo $category_id; ?></td></tr>
	    <tr><td>Comment</td><td><?php echo $comment; ?></td></tr>
	    <tr><td>Meta Title</td><td><?php echo $meta_title; ?></td></tr>
	    <tr><td>Meta Keyword</td><td><?php echo $meta_keyword; ?></td></tr>
	    <tr><td>Meta Description</td><td><?php echo $meta_description; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tbl_news') ?>" class="btn btn-primary waves-effect waves-themed">Kembali</a></td></tr>
	</table>
</div>
</div>

            </div>
        </div>
    </div>
</main>
<script src="<?php echo base_url() ?>assets/smartadmin/js/vendors.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/app.bundle.js"></script>