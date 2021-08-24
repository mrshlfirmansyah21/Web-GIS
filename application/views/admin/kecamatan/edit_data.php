<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title ?></title>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">
   <?php $this->load->view("admin/_partials/navbar.php") ?>
   <div id="wrapper"> 
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
		<div class="card mb-3">
			<div class="card-header">
				<a href="<?php echo site_url('admin/kecamatan/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
			</div>
			<div class="form-group">
				<div class="container" style="margin-top: 20px">
					<div class="col-md-12">
						<form action="" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?= $list->id_kecamatan?>" />
							<div class="form-group">
								<label for="text">Nama Kecamatan</label>
								<input type="text" name="nama_kecamatan" value="<?= $list->nama_kecamatan?>" class="form-control" placeholder="Nama Kecamatan">
							</div>
							<div class="form-group">
								<label for="text">Jumlah Ruta</label>
								<input type="text" name="jumlah_ruta" value="<?= $list->jumlah_ruta?>" class="form-control" placeholder="Jumlah Ruta">
							</div>
							<div class="form-group">
								<label for="text">Jumlah KK</label>
								<input type="text" name="jumlah_kk" value="<?= $list->jumlah_kk?>" class="form-control" placeholder="Jumlah KK">
							</div>
							<div class="form-group">
								<label for="text">Jumlah Jiwa</label>
								<input type="text" name="jumlah_dtks" value="<?= $list->jumlah_dtks?>" class="form-control" placeholder="Jumlah Jiwa">
							</div>
							
							<button type="submit" class="btn btn-md btn-success">Update</button>
							<button type="reset" class="btn btn-md btn-warning">reset</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

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