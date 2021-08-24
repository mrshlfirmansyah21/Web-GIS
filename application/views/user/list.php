<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/data_tables/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/data_tables/dataTables.bootstrap4.min.css">
    <?php $this->load->view("user/_partials/head.php") ?>
</head>
<body id="page-top">
    <?php $this->load->view("user/_partials/navbar.php")?>
    
    <div id="wrapper">
        <?php $this->load->view("user/_partials/sidebar.php") ?>
                
        <div class="card mb-3">
            <div class="form-group">
                <div class="col-md-12">
                    <div class="container" style="margin-top: 30px">
                        <div class="table-responsive">
                            <table id="table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kecamatan</th>
                                        <th>Jumlah Ruta</th>
                                        <th>Jumlah KK</th>
                                        <th>Jumlah Jiwa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        foreach($list as $hasil) { ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $hasil->nama_kecamatan ?></td>
                                            <td><?php echo $hasil->jumlah_ruta ?></td>
                                            <td><?php echo $hasil->jumlah_kk ?></td>
                                            <td><?php echo $hasil->jumlah_dtks ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?= base_url()?>assets/data_tables/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/data_tables/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/data_tables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/data_tables/dataTables.bootstrap4.min.js"></script>
    <script>
        $('#table').DataTable( {
        autoFill: true
    } );
    </script>

    <?php $this->load->view("user/_partials/footer.php") ?>
    <?php $this->load->view("user/_partials/js.php") ?>
    
</body>
</html>