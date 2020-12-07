<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>rahasia/assets/upload/layanan/<?php echo $setting['banner_service']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1>
                <!-- <?php echo $page_pelayanan['pelayanan_heading']; ?> -->
            </h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Service-Area Start-->
<div class="service-page pt_60 pb_90">
    <div class="container">
        <div class="row">
            <?php
            foreach ($pelayanans as $row) {
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item effect-item">
                        <a href="<?php echo base_url(); ?>service/view/<?php echo $row['id']; ?>" class="image-effect">
                            <div class="services-photo" style="background-image: url(<?php echo base_url(); ?>rahasia/assets/upload/layanan/<?php echo $row['photo']; ?>)"></div>
                        </a>
                        <div class="services-text">
                            <h3><a href="<?php echo base_url(); ?>pelayanan/view/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h3>
                            <p>
                                <?php echo nl2br($row['designation']); ?>
                            </p>
                            <div class="button-bn">
                                <a href="<?php echo base_url(); ?>pelayanan/view/<?php echo $row['id']; ?>"><?php echo READ_MORE; ?> <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<!--Service-Area End-->