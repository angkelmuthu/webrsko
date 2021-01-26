<main id="js-page-content" role="main" class="page-content">
	<div class="row">
		<div class="col-xl-12">
			<div id="panel-1" class="panel">
				<div class="panel-hdr">
					<h2>File Read</h2>
					<div class="panel-toolbar">
						<button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
						<button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
						<button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
					</div>
				</div>
				<div class="panel-container show">
					<div class="panel-content">
						<table class="table table-striped">
							<tr>
								<td>Name</td>
								<td><?php echo $name; ?></td>
							</tr>
							<tr>
								<td>Short Content</td>
								<td><?php echo $short_content; ?></td>
							</tr>
							<tr>
								<td>Content</td>
								<td><?php echo $content; ?></td>
							</tr>
							<tr>
								<td>Client Name</td>
								<td><?php echo $client_name; ?></td>
							</tr>
							<tr>
								<td>Client Company</td>
								<td><?php echo $client_company; ?></td>
							</tr>
							<tr>
								<td>Start Date</td>
								<td><?php echo $start_date; ?></td>
							</tr>
							<tr>
								<td>End Date</td>
								<td><?php echo $end_date; ?></td>
							</tr>
							<tr>
								<td>Website</td>
								<td><?php echo $website; ?></td>
							</tr>
							<tr>
								<td>Cost</td>
								<td><?php echo $cost; ?></td>
							</tr>
							<tr>
								<td>Client Comment</td>
								<td><?php echo $client_comment; ?></td>
							</tr>
							<tr>
								<td>Category Id</td>
								<td><?php echo $category_id; ?></td>
							</tr>
							<tr>
								<td>Photo</td>
								<td><?php echo base_url() ?>assets/upload/laporan/<?php echo $photo; ?></td>
							</tr>
							<tr>
								<td>Meta Title</td>
								<td><?php echo $meta_title; ?></td>
							</tr>
							<tr>
								<td>Meta Keyword</td>
								<td><?php echo $meta_keyword; ?></td>
							</tr>
							<tr>
								<td>Meta Description</td>
								<td><?php echo $meta_description; ?></td>
							</tr>
							<tr>
								<td></td>
								<td><a href="<?php echo site_url('tbl_portfolio') ?>" class="btn btn-primary waves-effect waves-themed">Kembali</a></td>
							</tr>
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>
</main>
<script src="<?php echo base_url() ?>assets/smartadmin/js/vendors.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/app.bundle.js"></script>