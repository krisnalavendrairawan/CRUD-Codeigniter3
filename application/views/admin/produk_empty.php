<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<?php $this->load->view('admin/_partials/header.php') ?>
	
	<div class="container-fluid">
		<div class="row">
			<?php $this->load->view('admin/_partials/sidebar.php') ?>
			<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<div class="table-responsive col-lg-8">
      <a href="/admin/produk/create" class="btn btn-primary mb-3">Create New Product</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama Produk</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Jumlah Barang</th>
			  <th scope="col">Dibuat</th>
			  <th scope="col">Diupdate</th>
			  <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
			<?php foreach($produk as $item) : ?>
				<tr>
				<td><?php echo $item['id'] ?></td>
				<td><?php echo $item['nama_produk'] ?></td>
				<td><?php echo $item['desc_barang'] ?></td>
				<td><?php echo $item['qty'] ?></td>
				<td><?php echo $item['created_at'] ?></td>
				<td><?php echo $item['updated_at'] ?></td>
				<td>
					<a href="<?php site_url('admin/produk/edit/'.$item->id) ?>" class="btn btn-warning">Edit</a>
					<a href="#" 
					data-delete-url="<?= site_url('admin/produk/delete'. $item->id) ?>"
					class="btn btn-danger"
					role = "button"
					onclick ="deleteConfirm(this)">Delete</a>
					
				</td>						
				</tr>
			<?php endforeach ?>

            
          </tbody>
        </table>
      </div>	
			</main>
		</div>
	</div>
	
	<?php $this->load->view('admin/_partials/footer.php') ?>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		function deleteConfirm(event){
			Swal.fire({
				title: 'Delete Confirmation!',
				text: 'Are you sure to delete the item?',
				icon: 'warning',
				showCancelButton: true,
				cancelButtonText: 'No',
				confirmButtonText: 'Yes Delete',
				confirmButtonColor: 'red'
			}).then(dialog => {
				if(dialog.isConfirmed){
					window.location.assign(event.dataset.deleteUrl);
				}
			});
		}

		
	</script>
		<?php if($this->session->flashdata('message')): ?>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})

			Toast.fire({
				icon: 'success',
				title: '<?= $this->session->flashdata('message') ?>'
			})
		</script>
	<?php endif ?>
</body>
	
</html>
