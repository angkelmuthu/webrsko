<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_service']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?php echo $pelayanan['name']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Single-Service Start-->
<div class="single-service-area pt_60 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-info">
                    <div class="single-ser-carousel owl-carousel">
                        <div class="event-photo-item">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $pelayanan['photo']; ?>" alt="Service Photo">
                        </div>
                    </div>
                    <h2><?php echo $pelayanan['name']; ?></h2>
                    <?php echo $pelayanan['comment']; ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-sidebar">
                    <div class="service-sidebar-item headstyle">
                        <h4>Pelayanan</h4>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>faq">Layanan Unggulan</a></li>
                            <li><a href="<?php echo base_url(); ?>service">Poliklinik</a></li>
                            <?php
                            foreach ($pelayanans as $row) {
                                ?>
                                <li><a href="<?php echo base_url(); ?>service/view/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Single-Service End-->