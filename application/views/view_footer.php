    <!--Call Start-->
    <!-- <div class="call-us" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['cta_background']; ?>)"> -->
    <!-- <div class="call-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="call-text">
                        <h3><?php echo $setting['cta_text']; ?></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="button">
                        <a href="<?php echo $setting['cta_button_url']; ?>"><?php echo $setting['cta_button_text']; ?> <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--Call End-->

    <!--Footer-Area Start-->
    <!-- <div class="footer-area pt_60 pb_90">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item" id="newsletter">
                        <h3><?php echo $setting['footer_col1_title']; ?></h3>
                        <p>
                            <?php echo nl2br($setting['newsletter_text']); ?>
                        </p>
                        <?php
                        if ($this->session->flashdata('error')) {
                            echo '<div class="error-class">' . $this->session->flashdata('error') . '</div>';
                        }
                        if ($this->session->flashdata('success')) {
                            echo '<div class="success-class">' . $this->session->flashdata('success') . '</div>';
                        }
                        ?>
                        <?php echo form_open(base_url() . 'newsletter/send', array('class' => '')); ?>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="<?php echo EMAIL_ADDRESS; ?>" name="email_subscribe" required>
                            <span class="input-group-btn">
                                <button class="btn" type="submit" name="form_subscribe"><i class="fa fa-location-arrow"></i></button>
                            </span>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h3><?php echo $setting['footer_col2_title']; ?></h3>
                        <ul>
                            <?php
                            $i = 0;
                            foreach ($all_news as $news) {
                                $i++;
                                if ($i > $setting['footer_recent_news_item']) {
                                    break;
                                }
                                ?>
                                <li><a href="<?php echo base_url(); ?>news/view/<?php echo $news['news_id']; ?>"><?php echo $news['news_title']; ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h3><?php echo $setting['footer_col3_title']; ?></h3>
                        <div class="row pl-10 pr-10">
                            <?php
                            $i = 0;
                            foreach ($portfolio_footer as $row) {
                                $i++;
                                if ($i > $setting['footer_recent_portfolio_item']) {
                                    break;
                                }
                                ?>
                                <div class="col-4 footer-project">
                                    <a href="<?php echo base_url(); ?>portfolio/view/<?php echo $row['id']; ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="Project Photo"></a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h3><?php echo $setting['footer_col4_title']; ?></h3>
                        <div class="footer-address-item">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <div class="text">
                                <span>
                                    <?php echo nl2br($setting['footer_address']); ?>
                                </span>
                            </div>
                        </div>
                        <div class="footer-address-item">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <div class="text">
                                <span>
                                    <?php echo nl2br($setting['footer_phone']); ?>
                                </span>
                            </div>
                        </div>
                        <div class="footer-address-item">
                            <div class="icon"><i class="fa fa-envelope-o"></i></div>
                            <div class="text">
                                <span>
                                    <?php echo nl2br($setting['footer_email']); ?>
                                </span>
                            </div>
                        </div>
                        <ul class="footer-social">
                            <?php
                            foreach ($social as $row) {
                                if ($row['social_url'] != '') {
                                    echo '<li><a href="' . $row['social_url'] . '"><i class="' . $row['social_icon'] . '"></i></a></li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="footer-bottom pt_10 pb_50">
        5 <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copy-text">
                        <p>
                            <?php echo $setting['footer_copyright']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-Area End-->

    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto);

        .whatsapp {
            font-family: Roboto, Arial, Sans-serif;
            font-size: 14px;
            /* font-weight: 400;
            right: 5%; */
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 999;
        }

        .btn-group.special {
            display: flex;
        }

        .special .btn {
            flex: 1
        }
    </style>
    <div class="whatsapp">
        <div class="counterup-area">
            <!-- <div class="bg-counterup"></div> -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="btn-group special" role="group" aria-label="...">
                            <a href="https://forms.gle/YXZrjoXZnvhMh3Pt9" target="_blank" class="btn btn-danger">Whistleblowing System ( WBS)</a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSezKJ7yxLHY3cs_SEQZW5UbECo1X3l8MbhKpJCchdouhCS3Cg/viewform?usp=sf_link" target="_blank" class="btn btn-warning">Laporkan Gratifikasi</a>
                            <a href="https://api.whatsapp.com/send?phone=6281318718880&text=Hallo RSKO!" class="btn btn-success" target="_blank">Chat Whatsapp</a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfYdMiGfgrsrGdEkRTduV8xtn2aDq2P8MGWrV6n0-m5k2HYGw/viewform?usp=sf_link" class="btn btn-info" target="_blank">Kepuasan Pelanggan</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Scroll-Top-->

    <!--Js-->
    <script src="<?php echo base_url(); ?>public/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.meanmenu.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.filterizr.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/viewportchecker.js"></script>
    <script src="<?php echo base_url(); ?>public/js/custom.js"></script>
    <script>
        $(document).ready(function() {
            $("#myModal").modal('show');
        });
    </script>
    </body>

    </html>