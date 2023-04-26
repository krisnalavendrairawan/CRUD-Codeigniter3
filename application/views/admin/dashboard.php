<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
		<link rel="stylesheet" href="assets/css/sidebar.css">
		<script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<?php $this->load->view('admin/_partials/header.php') ?>
  </head>
  <body>
		<style>
			.area{
				display: none;
			}
			h1{
				font-size : 50px;
			}
			.testimoni{
				
				top: 0;
				bottom : 0;


			}
		</style>
				<div class="container-fluid mt-5">
					<div class="row">
					

						
						<div class="col-lg-3" style="backgound-color : white;">
							<?php $this->load->view('admin/_partials/sidebar.php') ?>
						</div>
						<div class="col-lg-8">

							<h1 class="d-flex justify-content-center">Dashboard</h1>
							<div class="testimoni">
							<section class="relative isolate overflow-hidden bg-white px-6 py-2 sm:py-32 lg:px-8">
							<div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20"></div>
							<div class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center"></div>
							<div class="mx-auto max-w-2xl lg:max-w-4xl">
								<img class="mx-auto h-12" src="https://tailwindui.com/img/logos/workcation-logo-indigo-600.svg" alt="">
								<figure class="mt-2">
									<blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
										<p>“bissmillah dapet nilai A”</p>
									</blockquote>
									<figcaption class="mt-10">
										<img class="mx-auto h-20 w-20 rounded-full" src="<?= base_url('assets/img/me.jpg')?>" alt="">
										<div class="mt-4 flex items-center justify-center space-x-3 text-base">
											<div class="font-semibold text-gray-900">Krisna Lavendra Irawan</div>
											<svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
												<circle cx="1" cy="1" r="1" />
											</svg>
											<div class="text-gray-600">Creator</div>
										</div>
									</figcaption>
								</figure>
							</div>
						</section>
					</div>

							<div class="card border-info mb-3" style="max-width: 18rem;">
								<div class="card-header">produk</div>
								<div class="card-body">
									<h5 class="card-title"><?= $produk_count ?></h5>
									<p class="card-text">list produk</p>
									<a href="<?= site_url('admin/produk') ?>" class="btn btn-primary">View Produk</a>
								</div>
							</div>



							
	
										

						</div>

				

				</div>

        <?php $this->load->view('admin/_partials/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
