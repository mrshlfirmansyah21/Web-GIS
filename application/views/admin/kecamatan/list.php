<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/data_tables/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/data_tables/dataTables.bootstrap4.min.css">
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">
    <?php $this->load->view("admin/_partials/navbar.php")?>
    
    <div id="wrapper">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div class="card mb-3">
            <div class="form-group">
                <div class="col-md-12">    
                    <div class="container" style="margin-top: 30px">
                        <?php echo $this->session->flashdata('notif')?>
                        <a href=<?php echo site_url('admin/kecamatan/tambah') ?> class="btn btn-md btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
                        <hr>
                        
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kecamatan</th>
                                            <th>Jumlah Ruta</th>
                                            <th>Jumlah KK</th>
                                            <th>Jumlah Jiwa</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            foreach ($list as $hasil) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $hasil->nama_kecamatan ?></td>
                                                <td><?= $hasil->jumlah_ruta ?></td>
                                                <td><?= $hasil->jumlah_kk ?></td>
                                                <td><?= $hasil->jumlah_dtks ?></td>
                                                <td>
                                                    <a href="<?php echo site_url('admin/kecamatan/edit/' .$hasil->id_kecamatan) ?>" 
                                                        class="btn btn-sm btn-success"><i class="fas fa-edit"></i> Edit</a>
                                                    <a onclick="deleteConfirm('<?php echo site_url('admin/kecamatan/hapus/' .$hasil->id_kecamatan) ?>')" 
                                                        href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
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

    <?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/footer.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>
    
    <script>
        function deleteConfirm(url){
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
	</script>
</body>
</html>