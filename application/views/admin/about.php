<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
		<link rel="stylesheet" href="assets/css/sidebar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<?php $this->load->view('admin/_partials/header.php') ?>
  </head>
  <body>
		<style>
			.area{
				display: none;
			}
		</style>
				<div class="container-fluid mt-5">
					<div class="row">
						
						<div class="col-lg-2" style="backgound-color : white;">
							<?php $this->load->view('admin/_partials/sidebar.php') ?>
						</div>
						<div class="col-lg-8">

							<h1 class= "d-flex justify-content-center">About</h1>
							
							<div class="jumbotron">
								<div class="d-flex justify-content-center mt-3 mb-3" >
								<img src="<?= base_url('assets/img/me.jpg') ?>" alt="me.jpg" class="rounded-circle" width="200px">

								</div>
								<h1 class="display-4">Krisna Lavendra Irawan</h1>
								<p class="lead">NPM : 9882405120111019</p>
								<p class="lead">Kelas : IF5A</p>
								<hr class="my-4">
								<p>Memenuhi untuk tugas UTS Mata Kuliah Pemerograman Framework</p>
								<p class="lead">
									<a class="btn btn-primary btn-lg" href="<?= site_url('admin/dashboard') ?>" role="button">Back to Dashboard</a>
								</p>
							</div>
							
						</div>
					</div>
				</div>
        <?php $this->load->view('admin/_partials/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
