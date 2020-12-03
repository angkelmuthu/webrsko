<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Add Portfolio</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/portfolio" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>


<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php
	        if($this->session->flashdata('error')) {
	            ?>
	            <div class="callout callout-danger">
	                <p><?php echo $this->session->flashdata('error'); ?></p>
	            </div>
	            <?php
	        }
	        if($this->session->flashdata('success')) {
	            ?>
	            <div class="callout callout-success">
	                <p><?php echo $this->session->flashdata('success'); ?></p>
	            </div>
	            <?php
	        }
	        ?>

			<?php echo form_open_multipart(base_url().'admin/portfolio/add',array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>">
							</div>
						</div>
						<!--<div class="form-group">-->
						<!--	<label for="" class="col-sm-2 control-label">Short Content *</label>-->
						<!--	<div class="col-sm-8">-->
								<input type="hidden" class="form-control" name="short_content" style="height:100px;" value="short content">
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="form-group">-->
						<!--	<label for="" class="col-sm-2 control-label">Content *</label>-->
						<!--	<div class="col-sm-8">-->
								<input type="hidden" class="form-control" name="content" value="content">
						<!--	</div>-->
						<!--</div>-->
						
						<!--<div class="form-group">-->
						<!--	<label for="" class="col-sm-2 control-label">Client Name</label>-->
						<!--	<div class="col-sm-4">-->
								<input type="hidden" autocomplete="off" class="form-control" name="client_name" value="client_name">
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="form-group">-->
						<!--	<label for="" class="col-sm-2 control-label">Client Company</label>-->
						<!--	<div class="col-sm-4">-->
								<input type="hidden" autocomplete="off" class="form-control" name="client_company" value="client_company">
								<input type="hidden" autocomplete="off" class="form-control" name="category_id" value="1">
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="form-group">-->
						<!--	<label for="" class="col-sm-2 control-label">Start Date</label>-->
						<!--	<div class="col-sm-4">-->
								<input type="hidden" name="start_date" class="form-control" id="datepicker" value="<?php echo date('Y-m-d'); ?>">
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="form-group">-->
						<!--	<label for="" class="col-sm-2 control-label">End Date</label>-->
						<!--	<div class="col-sm-4">-->
								<input type="hidden" name="end_date" class="form-control" id="datepicker1" value="<?php echo date('Y-m-d'); ?>">
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="form-group">-->
						<!--	<label for="" class="col-sm-2 control-label">Website</label>-->
						<!--	<div class="col-sm-4">-->
								<input type="hidden" autocomplete="off" class="form-control" name="website" value="website">
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="form-group">-->
						<!--	<label for="" class="col-sm-2 control-label">Cost</label>-->
						<!--	<div class="col-sm-4">-->
								<input type="hidden" autocomplete="off" class="form-control" name="cost" value="cost">
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="form-group">-->
						<!--	<label for="" class="col-sm-2 control-label">Client Comment</label>-->
						<!--	<div class="col-sm-8">-->
								<input type="hidden" class="form-control" name="client_comment" style="height:250px;" value="client_comment">
						<!--	</div>-->
						<!--</div>-->
						<!--<h3 class="seo-info">Featured Photo</h3>-->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">File Upload *</label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>
						<!--<h3 class="seo-info">Other Photos</h3>-->
						<!--<div class="form-group">-->
						<!--	<label for="" class="col-sm-2 control-label">Other Photos</label>-->
						<!--	<div class="col-sm-6" style="padding-top:5px">-->
						<!--		<table id="PhotosTable" style="width:100%;">-->
      <!--                              <tbody>-->
      <!--                                  <tr>-->
      <!--                                      <td>-->
      <!--                                          <div class="upload-btn">-->
      <!--                                              <input type="file" name="photos[]">-->
      <!--                                          </div>-->
      <!--                                      </td>-->
      <!--                                      <td style="width:28px;"><a href="javascript:void()" class="Delete btn btn-danger btn-xs">X</a></td>-->
      <!--                                  </tr>-->
      <!--                              </tbody>-->
      <!--                          </table>-->
						<!--	</div>-->
						<!--	<div class="col-sm-2" style="padding-top:5px">-->
      <!--                          <input type="button" id="btnAddNew" value="Add Item" style="margin-bottom:10px;border:0;color: #fff;font-size: 14px;border-radius:3px;" class="btn btn-warning btn-xs">-->
      <!--                      </div>-->
						<!--</div>-->
						<!--<h3 class="seo-info">SEO Information</h3>-->
						<!--<div class="form-group">-->
						<!--	<label for="" class="col-sm-2 control-label">Meta Title</label>-->
						<!--	<div class="col-sm-6">-->
								<input type="hidden" autocomplete="off" class="form-control" name="meta_title" value="meta_title">
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="form-group">-->
						<!--	<label for="" class="col-sm-2 control-label">Meta Keyword</label>-->
						<!--	<div class="col-sm-8">-->
								<input type="hidden" class="form-control" name="meta_keyword" style="height:100px;" value="meta_keyword">
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="form-group">-->
						<!--	<label for="" class="col-sm-2 control-label">Meta Description</label>-->
						<!--	<div class="col-sm-8">-->
								<input type="hidden" class="form-control" name="meta_description" style="height:100px;" value="meta_description">
						<!--	</div>-->
						<!--</div>-->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>

					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</section>