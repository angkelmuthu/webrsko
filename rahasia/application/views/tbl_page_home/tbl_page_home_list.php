<main id="js-page-content" role="main" class="page-content">
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>KELOLA DATA HOME</h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="text-center">
                            <?php echo anchor(site_url('tbl_page_home/create'), '<i class="fal fa-plus-square" aria-hidden="true"></i> Tambah Data', 'class="btn btn-primary btn-sm waves-effect waves-themed"'); ?></div>
                        <table class="table table-bordered table-hover table-striped w-100" id="dt-basic-example">
                            <thead>
                                <tr>
                                    <th width="30px">No</th>
                                    <th>Title</th>
                                    <th>Meta Keyword</th>
                                    <th>Meta Description</th>
                                    <th>Home Welcome Title</th>
                                    <th>Home Welcome Subtitle</th>
                                    <th>Home Welcome Text</th>
                                    <!-- <th>Home Welcome Video</th> -->
                                    <th>Home Welcome Pbar1 Text</th>
                                    <th>Home Welcome Pbar1 Value</th>
                                    <th>Home Welcome Pbar2 Text</th>
                                    <th>Home Welcome Pbar2 Value</th>
                                    <th>Home Welcome Pbar3 Text</th>
                                    <th>Home Welcome Pbar3 Value</th>
                                    <th>Home Welcome Pbar4 Text</th>
                                    <th>Home Welcome Pbar4 Value</th>
                                    <th>Home Welcome Pbar5 Text</th>
                                    <th>Home Welcome Pbar5 Value</th>
                                    <th>Home Welcome Status</th>
                                    <th>Home Welcome Video Bg</th>
                                    <th>Home Why Choose Title</th>
                                    <th>Home Why Choose Subtitle</th>
                                    <th>Home Why Choose Status</th>
                                    <th>Home Feature Title</th>
                                    <th>Home Feature Subtitle</th>
                                    <th>Home Feature Status</th>
                                    <th>Home Service Title</th>
                                    <th>Home Service Subtitle</th>
                                    <th>Home Service Status</th>
                                    <th>Counter 1 Title</th>
                                    <th>Counter 1 Value</th>
                                    <th>Counter 1 Icon</th>
                                    <th>Counter 2 Title</th>
                                    <th>Counter 2 Value</th>
                                    <th>Counter 2 Icon</th>
                                    <th>Counter 3 Title</th>
                                    <th>Counter 3 Value</th>
                                    <th>Counter 3 Icon</th>
                                    <th>Counter 4 Title</th>
                                    <th>Counter 4 Value</th>
                                    <th>Counter 4 Icon</th>
                                    <th>Counter Photo</th>
                                    <th>Counter Status</th>
                                    <th>Home Portfolio Title</th>
                                    <th>Home Portfolio Subtitle</th>
                                    <th>Home Portfolio Status</th>
                                    <th>Home Booking Form Title</th>
                                    <th>Home Booking Faq Title</th>
                                    <th>Home Booking Status</th>
                                    <th>Home Booking Photo</th>
                                    <th>Home Team Title</th>
                                    <th>Home Team Subtitle</th>
                                    <th>Home Team Status</th>
                                    <th>Home Ptable Title</th>
                                    <th>Home Ptable Subtitle</th>
                                    <th>Home Ptable Status</th>
                                    <th>Home Testimonial Title</th>
                                    <th>Home Testimonial Subtitle</th>
                                    <th>Home Testimonial Photo</th>
                                    <th>Home Testimonial Status</th>
                                    <th>Home Blog Title</th>
                                    <th>Home Blog Subtitle</th>
                                    <th>Home Blog Item</th>
                                    <th>Home Blog Status</th>
                                    <th>Home Cta Text</th>
                                    <th>Home Cta Button Text</th>
                                    <th>Home Cta Button Url</th>
                                    <th width="200px">Action</th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="<?php echo base_url() ?>assets/smartadmin/js/vendors.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/app.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/datagrid/datatables/datatables.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/datagrid/datatables/datatables.export.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
            return {
                "iStart": oSettings._iDisplayStart,
                "iEnd": oSettings.fnDisplayEnd(),
                "iLength": oSettings._iDisplayLength,
                "iTotal": oSettings.fnRecordsTotal(),
                "iFilteredTotal": oSettings.fnRecordsDisplay(),
                "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
            };
        };

        var t = $("#dt-basic-example").dataTable({
            initComplete: function() {
                var api = this.api();
                $('#mytable_filter input')
                    .off('.DT')
                    .on('keyup.DT', function(e) {
                        if (e.keyCode == 13) {
                            api.search(this.value).draw();
                        }
                    });
            },
            oLanguage: {
                sProcessing: "loading..."
            },
            processing: true,
            serverSide: true,
            ajax: {
                "url": "tbl_page_home/json",
                "type": "POST"
            },
            columns: [{
                    "data": "id",
                    "orderable": false
                }, {
                    "data": "title"
                }, {
                    "data": "meta_keyword"
                }, {
                    "data": "meta_description"
                }, {
                    "data": "home_welcome_title"
                }, {
                    "data": "home_welcome_subtitle"
                }, {
                    "data": "home_welcome_text"
                    // }, {
                    //     "data": "home_welcome_video"
                }, {
                    "data": "home_welcome_pbar1_text"
                }, {
                    "data": "home_welcome_pbar1_value"
                }, {
                    "data": "home_welcome_pbar2_text"
                }, {
                    "data": "home_welcome_pbar2_value"
                }, {
                    "data": "home_welcome_pbar3_text"
                }, {
                    "data": "home_welcome_pbar3_value"
                }, {
                    "data": "home_welcome_pbar4_text"
                }, {
                    "data": "home_welcome_pbar4_value"
                }, {
                    "data": "home_welcome_pbar5_text"
                }, {
                    "data": "home_welcome_pbar5_value"
                }, {
                    "data": "home_welcome_status"
                }, {
                    "data": "home_welcome_video_bg"
                }, {
                    "data": "home_why_choose_title"
                }, {
                    "data": "home_why_choose_subtitle"
                }, {
                    "data": "home_why_choose_status"
                }, {
                    "data": "home_feature_title"
                }, {
                    "data": "home_feature_subtitle"
                }, {
                    "data": "home_feature_status"
                }, {
                    "data": "home_service_title"
                }, {
                    "data": "home_service_subtitle"
                }, {
                    "data": "home_service_status"
                }, {
                    "data": "counter_1_title"
                }, {
                    "data": "counter_1_value"
                }, {
                    "data": "counter_1_icon"
                }, {
                    "data": "counter_2_title"
                }, {
                    "data": "counter_2_value"
                }, {
                    "data": "counter_2_icon"
                }, {
                    "data": "counter_3_title"
                }, {
                    "data": "counter_3_value"
                }, {
                    "data": "counter_3_icon"
                }, {
                    "data": "counter_4_title"
                }, {
                    "data": "counter_4_value"
                }, {
                    "data": "counter_4_icon"
                }, {
                    "data": "counter_photo"
                }, {
                    "data": "counter_status"
                }, {
                    "data": "home_portfolio_title"
                }, {
                    "data": "home_portfolio_subtitle"
                }, {
                    "data": "home_portfolio_status"
                }, {
                    "data": "home_booking_form_title"
                }, {
                    "data": "home_booking_faq_title"
                }, {
                    "data": "home_booking_status"
                }, {
                    "data": "home_booking_photo"
                }, {
                    "data": "home_team_title"
                }, {
                    "data": "home_team_subtitle"
                }, {
                    "data": "home_team_status"
                }, {
                    "data": "home_ptable_title"
                }, {
                    "data": "home_ptable_subtitle"
                }, {
                    "data": "home_ptable_status"
                }, {
                    "data": "home_testimonial_title"
                }, {
                    "data": "home_testimonial_subtitle"
                }, {
                    "data": "home_testimonial_photo"
                }, {
                    "data": "home_testimonial_status"
                }, {
                    "data": "home_blog_title"
                }, {
                    "data": "home_blog_subtitle"
                }, {
                    "data": "home_blog_item"
                }, {
                    "data": "home_blog_status"
                }, {
                    "data": "home_cta_text"
                }, {
                    "data": "home_cta_button_text"
                }, {
                    "data": "home_cta_button_url"
                },
                {
                    "data": "action",
                    "orderable": false,
                    "className": "text-center"
                }
            ],
            order: [
                [0, 'desc']
            ],
            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            }
        });
    });
</script>