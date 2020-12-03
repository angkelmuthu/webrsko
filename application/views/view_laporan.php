<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/batik.jpg)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1>Laporan Rumah Sakit</h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--About Start-->
<div class="about-page pt_60 pb_30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Laporan</h3>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-left">No.</th>
                            <th class="text-left">Judul</th>
                            <th class="text-left">Deskripsi</th>
                            <th class="text-center">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $result =  $this->db->query("select * from tbl_portfolio order by id DESC");
                        foreach ($result->result() as $row) {
                            ?>
                            <tr class="info">
                                <td class="text-left"><?php echo $no; ?></td>
                                <td class="text-left"><?php echo $row->name ?></td>
                                <td class="text-left"><?php echo $row->short_content ?></td>
                                <td><a class="btn btn-sm btn-success" target="_blank" href="<?php echo base_url(); ?>/rahasia/assets/upload/laporan/<?php echo $row->photo ?>">Lihat</a></td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--About End-->