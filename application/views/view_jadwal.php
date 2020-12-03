<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/batik.jpg)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1>Jadwal Dokter</h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--About Start-->
<div class="about-page pt_60 pb_30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Jadwal Dokter - <?php echo date('F Y'); ?></h3>
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th class="text-center">Klinik</th>
                        <th class="text-center">Senin</th>
                        <th class="text-center">Selasa</th>
                        <th class="text-center">Rabu</th>
                        <th class="text-center">Kamis</th>
                        <th class="text-center">Jumat</th>
                        <th class="text-center">Sabtu</th>
                        <th class="text-center">Minggu</th>
                    </tr>
                    <?php
                    $tahun = date('Y');
                    $bulan = date('m');
                    $result =  $this->db->query("select *,b.nm_poli from tbl_jadwal_dokter a left join tbl_poli b on a.id_poli=b.id_poli where a.tahun=" . $tahun . " and a.bulan=" . $bulan . "");
                    foreach ($result->result() as $row) {
                        ?>
                        <tr class="info">
                            <td><?php echo $row->nm_poli ?></td>
                            <td style="font-size: 12px;"><?php echo $row->senin ?></td>
                            <td style="font-size: 12px;"><?php echo $row->selasa ?></td>
                            <td style="font-size: 12px;"><?php echo $row->rabu ?></td>
                            <td style="font-size: 12px;"><?php echo $row->kamis ?></td>
                            <td style="font-size: 12px;"><?php echo $row->jumat ?></td>
                            <td style="font-size: 12px;"><?php echo $row->sabtu ?></td>
                            <td style="font-size: 12px;"><?php echo $row->minggu ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<!--About End-->