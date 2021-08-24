<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("user/_partials/head.php") ?>
</head>
<body id="page-top">
    <?php $this->load->view("user/_partials/navbar.php")?>
    
    <div id="wrapper">
        <?php $this->load->view("user/_partials/sidebar.php") ?>
                
        <div class="card mb-3">
        <div class="card-header">
               <a href="<?php echo site_url('user/pencarian/')?>"><i class="fas fa-arrow-left"></i> Kembali</a>
           </div>
            <div class="form-group" style="height: 400px">
                <div class="col-md-12">
                    <div class="container" style="margin-top: 30px">
                        <div class="table-responsive">
                            <h3>Hasil Pencarian Data</h3>
                            <hr>

                            <?php
                                if(count($cari)==0)
                                    { echo "Data tidak ditemukan";}
                                        elseif(count($cari)>0)
                                        {
                                            $no = 1;
                                            function status($status) {
                                                if($status==1) {
                                                    $status = 'ya';
                                                }
                                                else {
                                                    $status = 'tidak';
                                                }
                                                return $status;
                                                }
                                        
                            foreach($cari as $data) { ?>
                            <table id="table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID BDT</th>
                                        <th>ID ART BDT</th>
                                        <th>No NIK</th>
                                        <th>No KK</th>
                                        <th>Kecamatan </th>
                                        <th>Desa</th>
                                        <th>Nana Lengkap</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Status PKH</th>
                                        <th>Status BPNT</th>
                                        <th>Status PBI</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $data->id_bdt ?></td>
                                        <td><?php echo $data->id_art_bdt ?></td>
                                        <td><?php echo $data->nik ?></td>
                                        <td><?php echo $data->kk ?></td>
                                        <td><?php echo $data->kec ?></td>
                                        <td><?php echo $data->desa ?></td>
                                        <td><?php echo $data->nama ?></td>
                                        <td ><?php echo $data->tgl_lahir ?></td>
                                        <td><?php echo $data->jk ?></td>
                                        <td><?php echo status($data->status_pkh);?></td>
                                        <td><?php echo status($data->status_bpnt); ?></td>
                                        <td><?php echo status($data->status_pbi);?></td>
                                    </tr>
                                    <?php } 
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view("user/_partials/footer.php") ?>
    <?php $this->load->view("user/_partials/js.php") ?>
    
</body>
</html>