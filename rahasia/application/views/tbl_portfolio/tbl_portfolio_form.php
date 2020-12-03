<main id="js-page-content" role="main" class="page-content">
	<div class="row">
		<div class="col-xl-12">
			<div id="panel-1" class="panel">
				<div class="panel-hdr">
					<h2>INPUT DATA FILE</h2>
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
									<td width='200'>Name <?php echo form_error('name') ?></td>
									<td><input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Short Content <?php echo form_error('short_content') ?></td>
									<td> <textarea class="form-control" non_pks="3" name="short_content" id="short_content" placeholder="Short Content"><?php echo $short_content; ?></textarea></td>
								</tr>
								<!-- <tr>
									<td width='200'>Content <?php echo form_error('content') ?></td>
									<td> <textarea class="form-control" non_pks="3" name="content" id="content" placeholder="Content"><?php echo $content; ?></textarea></td>
								</tr>
								<tr>
									<td width='200'>Client Name <?php echo form_error('client_name') ?></td>
									<td><input type="text" class="form-control" name="client_name" id="client_name" placeholder="Client Name" value="<?php echo $client_name; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Client Company <?php echo form_error('client_company') ?></td>
									<td><input type="text" class="form-control" name="client_company" id="client_company" placeholder="Client Company" value="<?php echo $client_company; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Start Date <?php echo form_error('start_date') ?></td>
									<td><input type="text" class="form-control" name="start_date" id="start_date" placeholder="Start Date" value="<?php echo $start_date; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>End Date <?php echo form_error('end_date') ?></td>
									<td><input type="text" class="form-control" name="end_date" id="end_date" placeholder="End Date" value="<?php echo $end_date; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Website <?php echo form_error('website') ?></td>
									<td><input type="text" class="form-control" name="website" id="website" placeholder="Website" value="<?php echo $website; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Cost <?php echo form_error('cost') ?></td>
									<td><input type="text" class="form-control" name="cost" id="cost" placeholder="Cost" value="<?php echo $cost; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Client Comment <?php echo form_error('client_comment') ?></td>
									<td> <textarea class="form-control" non_pks="3" name="client_comment" id="client_comment" placeholder="Client Comment"><?php echo $client_comment; ?></textarea></td>
								</tr> -->
								<!-- <tr>
									<td width='200'>Category Id <?php echo form_error('category_id') ?></td>
									<td><?php echo cmb_dinamis('category_id', 'tbl_category', 'category_id', 'category_name') ?></td>
								</tr> -->
								<tr>
									<td width='200'>File PDF <?php echo form_error('photo') ?></td>
									<td><input type="file" class="form-control" name="photo" id="photo" placeholder="Photo" value="<?php echo $photo; ?>" /></td>
								</tr>
								<!-- <tr>
									<td width='200'>Meta Title <?php echo form_error('meta_title') ?></td>
									<td><input type="text" class="form-control" name="meta_title" id="meta_title" placeholder="Meta Title" value="<?php echo $meta_title; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Meta Keyword <?php echo form_error('meta_keyword') ?></td>
									<td> <textarea class="form-control" non_pks="3" name="meta_keyword" id="meta_keyword" placeholder="Meta Keyword"><?php echo $meta_keyword; ?></textarea></td>
								</tr>
								<tr>
									<td width='200'>Meta Description <?php echo form_error('meta_description') ?></td>
									<td> <textarea class="form-control" non_pks="3" name="meta_description" id="meta_description" placeholder="Meta Description"><?php echo $meta_description; ?></textarea></td>
								</tr> -->
								<tr>
									<td></td>
									<td><input type="hidden" name="id" value="<?php echo $id; ?>" />
										<button type="submit" class="btn btn-warning waves-effect waves-themed"><i class="fal fa-save"></i> <?php echo $button ?></button>
										<a href="<?php echo site_url('tbl_portfolio') ?>" class="btn btn-info waves-effect waves-themed"><i class="fal fa-sign-out"></i> Kembali</a></td>
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