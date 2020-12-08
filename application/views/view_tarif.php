<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/batik.jpg)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1>Tarif Rumah Sakit</h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--About Start-->
<div class="about-page pt_60 pb_30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Tarif Rumah Sakit</h3>
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th class="text-left">Tindakan</th>
                        <th class="text-right">Tarif</th>
                    </tr>
                    <?php
                    $result =  $this->db->query("select * from tbl_tarif order by id asc");
                    foreach ($result->result() as $row) {
                        ?>
                        <tr class="info">
                            <td class="text-left"><?php echo $row->nm_tindakan ?></td>
                            <td class="text-right">Rp. <?php echo number_format($row->tarif, 2, ',', '.'); ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<!--About End-->