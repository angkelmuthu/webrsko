<link rel="stylesheet" media="screen, print" href="<?php echo base_url() ?>assets/smartadmin/css/formplugins/summernote/summernote.css">
<main id="js-page-content" role="main" class="page-content">
	<div class="row">
		<div class="col-xl-12">
			<div id="panel-1" class="panel">
				<div class="panel-hdr">
					<h2>INPUT DATA PROFIL DIREKSI</h2>
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
									<td width='200'>Nama Direksi <?php echo form_error('name') ?></td>
									<td><input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Jabatan <?php echo form_error('designation') ?></td>
									<td><input type="text" class="form-control" name="designation" id="designation" placeholder="Designation" value="<?php echo $designation; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Photo <?php echo form_error('photo') ?></td>
									<td><input type="file" class="form-control" name="photo" id="photo" placeholder="Photo" value="<?php echo $photo; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Profil Direksi <?php echo form_error('detail') ?></td>
									<td> <textarea class="form-control" non_pks="3" name="detail" class="js-summernote" id="summernote"><?php echo $detail; ?></textarea></td>
								</tr>
								<!-- <tr>
									<td width='200'>Facebook <?php echo form_error('facebook') ?></td>
									<td><input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook" value="<?php echo $facebook; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Twitter <?php echo form_error('twitter') ?></td>
									<td><input type="text" class="form-control" name="twitter" id="twitter" placeholder="Twitter" value="<?php echo $twitter; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Linkedin <?php echo form_error('linkedin') ?></td>
									<td><input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="Linkedin" value="<?php echo $linkedin; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Youtube <?php echo form_error('youtube') ?></td>
									<td><input type="text" class="form-control" name="youtube" id="youtube" placeholder="Youtube" value="<?php echo $youtube; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Google Plus <?php echo form_error('google_plus') ?></td>
									<td><input type="text" class="form-control" name="google_plus" id="google_plus" placeholder="Google Plus" value="<?php echo $google_plus; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Instagram <?php echo form_error('instagram') ?></td>
									<td><input type="text" class="form-control" name="instagram" id="instagram" placeholder="Instagram" value="<?php echo $instagram; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Flickr <?php echo form_error('flickr') ?></td>
									<td><input type="text" class="form-control" name="flickr" id="flickr" placeholder="Flickr" value="<?php echo $flickr; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Phone <?php echo form_error('phone') ?></td>
									<td><input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" value="<?php echo $phone; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Email <?php echo form_error('email') ?></td>
									<td><input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Website <?php echo form_error('website') ?></td>
									<td><input type="text" class="form-control" name="website" id="website" placeholder="Website" value="<?php echo $website; ?>" /></td>
								</tr> -->
								<tr>
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
								</tr>
								<tr>
									<td></td>
									<td><input type="hidden" name="id" value="<?php echo $id; ?>" />
										<button type="submit" class="btn btn-warning waves-effect waves-themed"><i class="fal fa-save"></i> <?php echo $button ?></button>
										<a href="<?php echo site_url('tbl_team_member') ?>" class="btn btn-info waves-effect waves-themed"><i class="fal fa-sign-out"></i> Kembali</a></td>
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
<script src="<?php echo base_url() ?>assets/smartadmin/js/formplugins/summernote/summernote.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#summernote').summernote({
			height: "300px",
			callbacks: {
				onImageUpload: function(image) {
					uploadImage(image[0]);
				},
				onMediaDelete: function(target) {
					deleteImage(target[0].src);
				}
			}
		});
	});
</script>