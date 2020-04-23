<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Project Antrian </title>

	<!-- plugins:css -->
	<link rel="stylesheet" href="<?= base_url('assets/node_modules/mdi/css/materialdesignicons.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/node_modules/simple-line-icons/css/simple-line-icons.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/node_modules/flag-icon-css/css/flag-icon.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/animate.css')?>">
	<!-- endinject -->

	<!-- plugin css for this page -->
	<link rel="stylesheet" href="<?= base_url('assets/node_modules/font-awesome/css/font-awesome.min.css')?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/node_modules/jquery-bar-rating/dist/themes/fontawesome-stars.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/js/node_modules/bare-bones-slider/css/jquery.bbslider.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/js/node_modules/video.js/dist/video-js.css')?>">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/fonts.css?v=1.0.0&&load='.time().'') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css?v=1.0.0&&load='.time().'')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/app.css?v=1.0.0&&load='.time().'')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/layanan.css?v=1.0.0&&load='.time().'')?>">
	<!-- endinject -->

	<link rel="shortcut icon" href="<?= base_url('assets/images/icon-antrian.png') ?>"/>

</head>

<body style='background-image: url("<?= base_url()?>assets/images/background/layanan.png");
	background-size: cover;background-repeat: no-repeat;background-position: initial;'>

	<div id="layananan-container" >
		<div id="layanan-header">
			<div class="row">
				<div class="col-12 d-flex justify-content-end">
					<div class="col-3 animated bounceInDown">
						<div id="date-time-indicator" >
							<div id="date-time-wrapper" style="background-color: white" class="card">
								<div class="time-indicator d-flex justify-content-center">
									<h1 style="color:blue;line-height: 60px;font-family: titilliumweb-bold;font-size: 45px" class="m-0" id="time-content">
									</h1>
								</div>
								<div class="date-indicator d-flex justify-content-center">
									<h4 style="color:blue;font-family: titilliumweb-bold, sans-serif;line-height: 44px" class="m-0" id="date-content">

									</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="layanan-body " style="padding-left: 140px;padding-right: 140px;padding-top: 50px">
			<div class="container">
				<div class="row d-flex justify-content-center">

					<div class="col-8 grid-margin animated bounceIn">
						<div class="card bg-behance card-shadow" style='background-image: url("<?= base_url()?>assets/images/background/batik.png");
							background-size: cover;background-repeat: no-repeat;background-position: initial;'>
							<div class="card-body">
								<form action="<?= base_url('LayananController/registrasi')?>" class="form-row" method="post">
									<div class="form-group col-12">
										<h2 class="text-center text-white mt-0" style="font-family: titilliumweb-bold">SILAHKAN MASUK</h2>
									</div>
									<?php if ($this->session->flashdata('alert') === 'fail'):?>
										<div class="col-12 d-flex justify-content-center mt-0 animated bounceIn">
											<div class="alert bg-danger text-white col-12">
												<h4 style="font-family: titilliumweb-bold" class="text-center">Periksa data login anda !!</h4>
											</div>
										</div>
									<?php endif?>
									<div class="form-group col-12">
										<h3 style="font-family: titilliumweb-bold" class="text-white">
											Username
										</h3>
										<input type="text" class="form-control form-control-lg"  placeholder="username anda" name="username" style="font-size: 18px">
									</div>

									<div class="form-group col-12 mt-2">
										<h3 style="font-family: titilliumweb-bold" class="text-white">
											Password
										</h3>
										<input type="password" class="form-control form-control-lg" name="password" placeholder="password anda" style="font-size: 18px">
									</div>

									<div class="col-12 mt-4">
										<button class="btn btn-dark col-12 text-white" type="submit" name="login" style="font-size: 18px;font-family: titilliumweb-bold">MASUK</button>
									</div>

								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- plugins:js -->
	<script src="<?= base_url('assets/node_modules/jquery/dist/jquery.min.js')?>"></script>
	<!--connection class-->
	<script src="<?= base_url('assets/js/audio/Connection.js?v=1.0.0&&load='.time()) ?>"></script>
	<!-- connection class -->
	<script src="<?= base_url('assets/node_modules/moment/moment.js')?>"></script>
	<!--		<script src="--><?//= base_url('assets/node_modules/moment/moment-with-locales.js')?><!--"></script>-->
	<script src="<?= base_url('assets/node_modules/popper.js/dist/umd/popper.min.js') ?>"></script>
	<script src="<?= base_url('assets/node_modules/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')?>"></script>
	<!-- endinject -->

	<!-- Plugin js for this page-->
	<script src="<?= base_url('assets/') ?>node_modules/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
	<script src="<?= base_url('assets/') ?>node_modules/chart.js/dist/Chart.min.js"></script>
	<script src="<?= base_url('assets/') ?>node_modules/raphael/raphael.min.js"></script>
	<script src="<?= base_url('assets/') ?>node_modules/morris.js/morris.min.js"></script>
	<script src="<?= base_url('assets/') ?>node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
	<!-- End plugin js for this page-->

	<!-- inject:js -->
	<script src="<?= base_url('assets/') ?>js/off-canvas.js"></script>
	<script src="<?= base_url('assets/') ?>js/hoverable-collapse.js"></script>
	<script src="<?= base_url('assets/') ?>js/misc.js"></script>
	<script src="<?= base_url('assets/') ?>js/settings.js"></script>
	<script src="<?= base_url('assets/') ?>js/todolist.js"></script>
	<!-- endinject -->

	<!-- Custom js for this page-->
	<script src="<?= base_url('assets/js/plugins/countdown.js') ?>"></script>
	<script src="<?= base_url('assets/js/plugins/moment.js') ?>"></script>
	<script src="<?= base_url('assets/') ?>js/dashboard.js?v=1.0.0&&load="<?= time()?>></script>
	<script src="<?= base_url('assets/js/package/timer.js?v=1.0.0&&load='.time().'') ?>"></script>
	<!-- End custom js for this page-->

	<!-- howler js untuk suara -->
	<script src="<?= base_url('assets/node_modules/howler/dist/howler.js?v=1.0.0&&load='.time()) ?>"></script>
	<!--		<script src="--><?//= base_url('assets/node_modules/howler/dist/howler.core.min.js?v=1.0.0&&load='.time()) ?><!--"></script>-->
	<!--		<script src="--><?//= base_url('assets/node_modules/howler/dist/howler.spatial.min.js?v=1.0.0&&load='.time()) ?><!--"></script>-->
	<!-- howler js untuk suara -->


	<!-- JS inject for playing audio  -->
	<script src="<?= base_url('assets/js/audio/Services.js?v=1.0.0&&load='.time()) ?>"></script>
	<script src="<?= base_url('assets/js/audio/AudioHelper.js?v=1.0.0&&load='.time()) ?>"></script>
	<script src="<?= base_url('assets/js/audio/MainAntrian.js?v=1.0.0&&load='.time()) ?>"></script>
	<!-- end inject -->

</body>

</html>
