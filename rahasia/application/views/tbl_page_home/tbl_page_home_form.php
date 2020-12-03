<link rel="stylesheet" media="screen, print" href="<?php echo base_url() ?>assets/smartadmin/css/formplugins/summernote/summernote.css">

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
									<td width='200'>Title <?php echo form_error('title') ?></td>
									<td><input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?php echo $title; ?>" /></td>
								</tr>

								<tr>
									<td width='200'>Home Welcome Title <?php echo form_error('home_welcome_title') ?></td>
									<td><input type="text" class="form-control" name="home_welcome_title" id="home_welcome_title" placeholder="Home Welcome Title" value="<?php echo $home_welcome_title; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Welcome Subtitle <?php echo form_error('home_welcome_subtitle') ?></td>
									<td><input type="text" class="form-control" name="home_welcome_subtitle" id="home_welcome_subtitle" placeholder="Home Welcome Subtitle" value="<?php echo $home_welcome_subtitle; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Welcome Text <?php echo form_error('home_welcome_text') ?></td>
									<td> <textarea class="form-control" non_pks="3" name="home_welcome_text" class="js-summernote" id="summernote"><?php echo $home_welcome_text; ?></textarea></td>
								</tr>
								<tr>
									<td width='200'>Home Welcome Video <?php echo form_error('home_welcome_video') ?></td>
									<td><input type="text" class="form-control" name="home_welcome_video" id="home_welcome_video" placeholder="Home Welcome Video" value="<?php echo $home_welcome_video; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Meta Keyword <?php echo form_error('meta_keyword') ?></td>
									<td> <textarea class="form-control" non_pks="3" name="meta_keyword" id="meta_keyword" placeholder="Meta Keyword"><?php echo $meta_keyword; ?></textarea></td>
								</tr>
								<tr>
									<td width='200'>Meta Description <?php echo form_error('meta_description') ?></td>
									<td> <textarea class="form-control" non_pks="3" name="meta_description" id="meta_description" placeholder="Meta Description"><?php echo $meta_description; ?></textarea></td>
								</tr>
								<!-- <tr>
									<td width='200'>Home Welcome Pbar1 Text <?php echo form_error('home_welcome_pbar1_text') ?></td>
									<td><input type="text" class="form-control" name="home_welcome_pbar1_text" id="home_welcome_pbar1_text" placeholder="Home Welcome Pbar1 Text" value="<?php echo $home_welcome_pbar1_text; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Welcome Pbar1 Value <?php echo form_error('home_welcome_pbar1_value') ?></td>
									<td><input type="text" class="form-control" name="home_welcome_pbar1_value" id="home_welcome_pbar1_value" placeholder="Home Welcome Pbar1 Value" value="<?php echo $home_welcome_pbar1_value; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Welcome Pbar2 Text <?php echo form_error('home_welcome_pbar2_text') ?></td>
									<td><input type="text" class="form-control" name="home_welcome_pbar2_text" id="home_welcome_pbar2_text" placeholder="Home Welcome Pbar2 Text" value="<?php echo $home_welcome_pbar2_text; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Welcome Pbar2 Value <?php echo form_error('home_welcome_pbar2_value') ?></td>
									<td><input type="text" class="form-control" name="home_welcome_pbar2_value" id="home_welcome_pbar2_value" placeholder="Home Welcome Pbar2 Value" value="<?php echo $home_welcome_pbar2_value; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Welcome Pbar3 Text <?php echo form_error('home_welcome_pbar3_text') ?></td>
									<td><input type="text" class="form-control" name="home_welcome_pbar3_text" id="home_welcome_pbar3_text" placeholder="Home Welcome Pbar3 Text" value="<?php echo $home_welcome_pbar3_text; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Welcome Pbar3 Value <?php echo form_error('home_welcome_pbar3_value') ?></td>
									<td><input type="text" class="form-control" name="home_welcome_pbar3_value" id="home_welcome_pbar3_value" placeholder="Home Welcome Pbar3 Value" value="<?php echo $home_welcome_pbar3_value; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Welcome Pbar4 Text <?php echo form_error('home_welcome_pbar4_text') ?></td>
									<td><input type="text" class="form-control" name="home_welcome_pbar4_text" id="home_welcome_pbar4_text" placeholder="Home Welcome Pbar4 Text" value="<?php echo $home_welcome_pbar4_text; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Welcome Pbar4 Value <?php echo form_error('home_welcome_pbar4_value') ?></td>
									<td><input type="text" class="form-control" name="home_welcome_pbar4_value" id="home_welcome_pbar4_value" placeholder="Home Welcome Pbar4 Value" value="<?php echo $home_welcome_pbar4_value; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Welcome Pbar5 Text <?php echo form_error('home_welcome_pbar5_text') ?></td>
									<td><input type="text" class="form-control" name="home_welcome_pbar5_text" id="home_welcome_pbar5_text" placeholder="Home Welcome Pbar5 Text" value="<?php echo $home_welcome_pbar5_text; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Welcome Pbar5 Value <?php echo form_error('home_welcome_pbar5_value') ?></td>
									<td><input type="text" class="form-control" name="home_welcome_pbar5_value" id="home_welcome_pbar5_value" placeholder="Home Welcome Pbar5 Value" value="<?php echo $home_welcome_pbar5_value; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Welcome Status <?php echo form_error('home_welcome_status') ?></td>
									<td><input type="text" class="form-control" name="home_welcome_status" id="home_welcome_status" placeholder="Home Welcome Status" value="<?php echo $home_welcome_status; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Welcome Video Bg <?php echo form_error('home_welcome_video_bg') ?></td>
									<td><input type="text" class="form-control" name="home_welcome_video_bg" id="home_welcome_video_bg" placeholder="Home Welcome Video Bg" value="<?php echo $home_welcome_video_bg; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Why Choose Title <?php echo form_error('home_why_choose_title') ?></td>
									<td><input type="text" class="form-control" name="home_why_choose_title" id="home_why_choose_title" placeholder="Home Why Choose Title" value="<?php echo $home_why_choose_title; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Why Choose Subtitle <?php echo form_error('home_why_choose_subtitle') ?></td>
									<td><input type="text" class="form-control" name="home_why_choose_subtitle" id="home_why_choose_subtitle" placeholder="Home Why Choose Subtitle" value="<?php echo $home_why_choose_subtitle; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Why Choose Status <?php echo form_error('home_why_choose_status') ?></td>
									<td><input type="text" class="form-control" name="home_why_choose_status" id="home_why_choose_status" placeholder="Home Why Choose Status" value="<?php echo $home_why_choose_status; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Feature Title <?php echo form_error('home_feature_title') ?></td>
									<td><input type="text" class="form-control" name="home_feature_title" id="home_feature_title" placeholder="Home Feature Title" value="<?php echo $home_feature_title; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Feature Subtitle <?php echo form_error('home_feature_subtitle') ?></td>
									<td><input type="text" class="form-control" name="home_feature_subtitle" id="home_feature_subtitle" placeholder="Home Feature Subtitle" value="<?php echo $home_feature_subtitle; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Feature Status <?php echo form_error('home_feature_status') ?></td>
									<td><input type="text" class="form-control" name="home_feature_status" id="home_feature_status" placeholder="Home Feature Status" value="<?php echo $home_feature_status; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Service Title <?php echo form_error('home_service_title') ?></td>
									<td><input type="text" class="form-control" name="home_service_title" id="home_service_title" placeholder="Home Service Title" value="<?php echo $home_service_title; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Service Subtitle <?php echo form_error('home_service_subtitle') ?></td>
									<td><input type="text" class="form-control" name="home_service_subtitle" id="home_service_subtitle" placeholder="Home Service Subtitle" value="<?php echo $home_service_subtitle; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Service Status <?php echo form_error('home_service_status') ?></td>
									<td><input type="text" class="form-control" name="home_service_status" id="home_service_status" placeholder="Home Service Status" value="<?php echo $home_service_status; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Counter 1 Title <?php echo form_error('counter_1_title') ?></td>
									<td><input type="text" class="form-control" name="counter_1_title" id="counter_1_title" placeholder="Counter 1 Title" value="<?php echo $counter_1_title; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Counter 1 Value <?php echo form_error('counter_1_value') ?></td>
									<td><input type="text" class="form-control" name="counter_1_value" id="counter_1_value" placeholder="Counter 1 Value" value="<?php echo $counter_1_value; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Counter 1 Icon <?php echo form_error('counter_1_icon') ?></td>
									<td><input type="text" class="form-control" name="counter_1_icon" id="counter_1_icon" placeholder="Counter 1 Icon" value="<?php echo $counter_1_icon; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Counter 2 Title <?php echo form_error('counter_2_title') ?></td>
									<td><input type="text" class="form-control" name="counter_2_title" id="counter_2_title" placeholder="Counter 2 Title" value="<?php echo $counter_2_title; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Counter 2 Value <?php echo form_error('counter_2_value') ?></td>
									<td><input type="text" class="form-control" name="counter_2_value" id="counter_2_value" placeholder="Counter 2 Value" value="<?php echo $counter_2_value; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Counter 2 Icon <?php echo form_error('counter_2_icon') ?></td>
									<td><input type="text" class="form-control" name="counter_2_icon" id="counter_2_icon" placeholder="Counter 2 Icon" value="<?php echo $counter_2_icon; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Counter 3 Title <?php echo form_error('counter_3_title') ?></td>
									<td><input type="text" class="form-control" name="counter_3_title" id="counter_3_title" placeholder="Counter 3 Title" value="<?php echo $counter_3_title; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Counter 3 Value <?php echo form_error('counter_3_value') ?></td>
									<td><input type="text" class="form-control" name="counter_3_value" id="counter_3_value" placeholder="Counter 3 Value" value="<?php echo $counter_3_value; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Counter 3 Icon <?php echo form_error('counter_3_icon') ?></td>
									<td><input type="text" class="form-control" name="counter_3_icon" id="counter_3_icon" placeholder="Counter 3 Icon" value="<?php echo $counter_3_icon; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Counter 4 Title <?php echo form_error('counter_4_title') ?></td>
									<td><input type="text" class="form-control" name="counter_4_title" id="counter_4_title" placeholder="Counter 4 Title" value="<?php echo $counter_4_title; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Counter 4 Value <?php echo form_error('counter_4_value') ?></td>
									<td><input type="text" class="form-control" name="counter_4_value" id="counter_4_value" placeholder="Counter 4 Value" value="<?php echo $counter_4_value; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Counter 4 Icon <?php echo form_error('counter_4_icon') ?></td>
									<td><input type="text" class="form-control" name="counter_4_icon" id="counter_4_icon" placeholder="Counter 4 Icon" value="<?php echo $counter_4_icon; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Counter Photo <?php echo form_error('counter_photo') ?></td>
									<td><input type="text" class="form-control" name="counter_photo" id="counter_photo" placeholder="Counter Photo" value="<?php echo $counter_photo; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Counter Status <?php echo form_error('counter_status') ?></td>
									<td><input type="text" class="form-control" name="counter_status" id="counter_status" placeholder="Counter Status" value="<?php echo $counter_status; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Portfolio Title <?php echo form_error('home_portfolio_title') ?></td>
									<td><input type="text" class="form-control" name="home_portfolio_title" id="home_portfolio_title" placeholder="Home Portfolio Title" value="<?php echo $home_portfolio_title; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Portfolio Subtitle <?php echo form_error('home_portfolio_subtitle') ?></td>
									<td><input type="text" class="form-control" name="home_portfolio_subtitle" id="home_portfolio_subtitle" placeholder="Home Portfolio Subtitle" value="<?php echo $home_portfolio_subtitle; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Portfolio Status <?php echo form_error('home_portfolio_status') ?></td>
									<td><input type="text" class="form-control" name="home_portfolio_status" id="home_portfolio_status" placeholder="Home Portfolio Status" value="<?php echo $home_portfolio_status; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Booking Form Title <?php echo form_error('home_booking_form_title') ?></td>
									<td><input type="text" class="form-control" name="home_booking_form_title" id="home_booking_form_title" placeholder="Home Booking Form Title" value="<?php echo $home_booking_form_title; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Booking Faq Title <?php echo form_error('home_booking_faq_title') ?></td>
									<td><input type="text" class="form-control" name="home_booking_faq_title" id="home_booking_faq_title" placeholder="Home Booking Faq Title" value="<?php echo $home_booking_faq_title; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Booking Status <?php echo form_error('home_booking_status') ?></td>
									<td><input type="text" class="form-control" name="home_booking_status" id="home_booking_status" placeholder="Home Booking Status" value="<?php echo $home_booking_status; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Booking Photo <?php echo form_error('home_booking_photo') ?></td>
									<td><input type="text" class="form-control" name="home_booking_photo" id="home_booking_photo" placeholder="Home Booking Photo" value="<?php echo $home_booking_photo; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Team Title <?php echo form_error('home_team_title') ?></td>
									<td><input type="text" class="form-control" name="home_team_title" id="home_team_title" placeholder="Home Team Title" value="<?php echo $home_team_title; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Team Subtitle <?php echo form_error('home_team_subtitle') ?></td>
									<td><input type="text" class="form-control" name="home_team_subtitle" id="home_team_subtitle" placeholder="Home Team Subtitle" value="<?php echo $home_team_subtitle; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Team Status <?php echo form_error('home_team_status') ?></td>
									<td><input type="text" class="form-control" name="home_team_status" id="home_team_status" placeholder="Home Team Status" value="<?php echo $home_team_status; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Ptable Title <?php echo form_error('home_ptable_title') ?></td>
									<td><input type="text" class="form-control" name="home_ptable_title" id="home_ptable_title" placeholder="Home Ptable Title" value="<?php echo $home_ptable_title; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Ptable Subtitle <?php echo form_error('home_ptable_subtitle') ?></td>
									<td><input type="text" class="form-control" name="home_ptable_subtitle" id="home_ptable_subtitle" placeholder="Home Ptable Subtitle" value="<?php echo $home_ptable_subtitle; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Ptable Status <?php echo form_error('home_ptable_status') ?></td>
									<td><input type="text" class="form-control" name="home_ptable_status" id="home_ptable_status" placeholder="Home Ptable Status" value="<?php echo $home_ptable_status; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Testimonial Title <?php echo form_error('home_testimonial_title') ?></td>
									<td><input type="text" class="form-control" name="home_testimonial_title" id="home_testimonial_title" placeholder="Home Testimonial Title" value="<?php echo $home_testimonial_title; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Testimonial Subtitle <?php echo form_error('home_testimonial_subtitle') ?></td>
									<td><input type="text" class="form-control" name="home_testimonial_subtitle" id="home_testimonial_subtitle" placeholder="Home Testimonial Subtitle" value="<?php echo $home_testimonial_subtitle; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Testimonial Photo <?php echo form_error('home_testimonial_photo') ?></td>
									<td><input type="text" class="form-control" name="home_testimonial_photo" id="home_testimonial_photo" placeholder="Home Testimonial Photo" value="<?php echo $home_testimonial_photo; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Testimonial Status <?php echo form_error('home_testimonial_status') ?></td>
									<td><input type="text" class="form-control" name="home_testimonial_status" id="home_testimonial_status" placeholder="Home Testimonial Status" value="<?php echo $home_testimonial_status; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Blog Title <?php echo form_error('home_blog_title') ?></td>
									<td><input type="text" class="form-control" name="home_blog_title" id="home_blog_title" placeholder="Home Blog Title" value="<?php echo $home_blog_title; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Blog Subtitle <?php echo form_error('home_blog_subtitle') ?></td>
									<td><input type="text" class="form-control" name="home_blog_subtitle" id="home_blog_subtitle" placeholder="Home Blog Subtitle" value="<?php echo $home_blog_subtitle; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Blog Item <?php echo form_error('home_blog_item') ?></td>
									<td><input type="text" class="form-control" name="home_blog_item" id="home_blog_item" placeholder="Home Blog Item" value="<?php echo $home_blog_item; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Blog Status <?php echo form_error('home_blog_status') ?></td>
									<td><input type="text" class="form-control" name="home_blog_status" id="home_blog_status" placeholder="Home Blog Status" value="<?php echo $home_blog_status; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Cta Text <?php echo form_error('home_cta_text') ?></td>
									<td> <textarea class="form-control" non_pks="3" name="home_cta_text" id="home_cta_text" placeholder="Home Cta Text"><?php echo $home_cta_text; ?></textarea></td>
								</tr>
								<tr>
									<td width='200'>Home Cta Button Text <?php echo form_error('home_cta_button_text') ?></td>
									<td><input type="text" class="form-control" name="home_cta_button_text" id="home_cta_button_text" placeholder="Home Cta Button Text" value="<?php echo $home_cta_button_text; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Home Cta Button Url <?php echo form_error('home_cta_button_url') ?></td>
									<td><input type="text" class="form-control" name="home_cta_button_url" id="home_cta_button_url" placeholder="Home Cta Button Url" value="<?php echo $home_cta_button_url; ?>" /></td>
								</tr> -->
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