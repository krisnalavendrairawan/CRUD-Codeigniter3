<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<body>
	<?php $this->load->view('admin/_partials/header.php') ?>
	<div class="container-fluid">
		<div class="row">
		<?php $this->load->view('admin/_partials/sidebar.php') ?>
		<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			
		

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Produk</h1>
    </div>

	<div class="col-lg-8">
		<form method="POST" action="<?= site_url('admin/produk/update') ?>">
		<input type="hidden" name="id" id="id" value="<?= $produk->id ?>" >
			<div class="mb-3">
                <label for="nama_produk" class="form-label" >Nama Produk</label>
				<input type="text" class="form-control" id="nama_produk" name="nama_produk" required value="<?= $produk->nama_produk ?>">
        	</div>
			<div class="mb-3">
                <label for="desc_barang" class="form-label">Deskripsi</label>
				<input type="text" class="form-control" id="desc_barang" name="desc_barang" required value="<?= $produk->desc_barang ?>">
        	</div>
			<div class="mb-3">
                <label for="qty" class="form-label">Jumlah</label>
				<input type="text" class="form-control" id="qty" name="qty" required value="<?= $produk->qty ?>">
        	</div>
			<div class="mb-3">
				<label for="harga" class="form-label">Harga</label>
				<input type="text" class="form-control" id="harga" name="harga" required value="<?= $produk->harga ?>">
			</div>

			<button type="submit" class="btn btn-primary">Create Produk</button>
		</form>
	</div>
	</main>
</div>
<?php $this->load->view('admin/_partials/footer.php') ?>
</body>
</html>
