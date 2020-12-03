<main id="js-page-content" role="main" class="page-content">
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>INPUT DATA KONTAK RSKO</h2>
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


	    <tr><td width='200'>Contact Heading <?php echo form_error('contact_heading') ?></td><td><input type="text" class="form-control" name="contact_heading" id="contact_heading" placeholder="Contact Heading" value="<?php echo $contact_heading; ?>" /></td></tr>
	    <tr><td width='200'>Contact Address <?php echo form_error('contact_address') ?></td><td> <textarea class="form-control" non_pks="3" name="contact_address" id="contact_address" placeholder="Contact Address"><?php echo $contact_address; ?></textarea></td></tr>
	    <tr><td width='200'>Contact Email <?php echo form_error('contact_email') ?></td><td><input type="text" class="form-control" name="contact_email" id="contact_email" placeholder="Contact Email" value="<?php echo $contact_email; ?>" /></td></tr>
	    <tr><td width='200'>Contact Phone <?php echo form_error('contact_phone') ?></td><td><input type="text" class="form-control" name="contact_phone" id="contact_phone" placeholder="Contact Phone" value="<?php echo $contact_phone; ?>" /></td></tr>
	    <tr><td width='200'>Contact Map <?php echo form_error('contact_map') ?></td><td> <textarea class="form-control" non_pks="3" name="contact_map" id="contact_map" placeholder="Contact Map"><?php echo $contact_map; ?></textarea></td></tr>
	    <tr><td width='200'>Mt Contact <?php echo form_error('mt_contact') ?></td><td><input type="text" class="form-control" name="mt_contact" id="mt_contact" placeholder="Mt Contact" value="<?php echo $mt_contact; ?>" /></td></tr>
	    <tr><td width='200'>Mk Contact <?php echo form_error('mk_contact') ?></td><td><input type="text" class="form-control" name="mk_contact" id="mk_contact" placeholder="Mk Contact" value="<?php echo $mk_contact; ?>" /></td></tr>
	    <tr><td width='200'>Md Contact <?php echo form_error('md_contact') ?></td><td><input type="text" class="form-control" name="md_contact" id="md_contact" placeholder="Md Contact" value="<?php echo $md_contact; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-warning waves-effect waves-themed"><i class="fal fa-save"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('tbl_page_contact') ?>" class="btn btn-info waves-effect waves-themed"><i class="fal fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
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