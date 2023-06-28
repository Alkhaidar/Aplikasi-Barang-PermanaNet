@extends('dashboard.layout.main')
@section('conten')


<div class="container-fluid">
	<div class="alert alert-light " role="alert">
		Selamat Datang <a href="#" class="alert-link"></a>di Aplikasi Inventori Barang Permana
	</div> 


<!-- Content Row -->
<div class="row">
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-gray-500 text-uppercase mb-1" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">
							Barang
						</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">{{$databarang}}</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-shopping-cart fa-2x text-gray-300" style="color: #D2691E; font-size: 28px;"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-gray-500 text-uppercase mb-1" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">
							Barang Masuk
						</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">{{$databarangmasuk}}</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-sign-in-alt fa-2x text-gray-300" style="color: #1E90FF; font-size: 28px;"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-info shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-gray-500 text-uppercase mb-1" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Barang Keluar</div>
						<div class="row no-gutters align-items-center">
							<div class="col-auto">
								<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">{{$databarangkeluar}}</div>
							</div>
						</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-sign-out-alt fa-2x text-gray-300" style="color: #FFA500; font-size: 28px;"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-gray-500 text-uppercase mb-1" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">
							Admin
						</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">{{$datauser}}</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-user-shield fa-2x text-gray-300" style="color: #228B22; font-size: 28px;"></i>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="row mt-1">
		<div class="col-lg-7 mb-lg-0 mb-4">
			<div class="card z-index-2 h-100">
				<div class="card-header pb-0 pt-3 bg-transparent">

					<!DOCTYPE html>
					<html>

					<body>
						<!DOCTYPE html>
						<html>

						<head>
							<title>Grafik Inventory Barang Permana</title>
							<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
							<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
						</head>
						<body>
							<div class="container-sm mt-3">
								<div class="card">
									<div class="card-body">
										<canvas id="myChart"></canvas>

										<?php
										// Data untuk grafik kolom
										$labels = ['Barang', 'Barang Masuk', 'Barang Keluar', 'User'];
										$data = [$databarang, $databarangmasuk, $databarangkeluar, $datauser];
										$colors = ['#FF6384', '#36A2EB', '#FFCE56', '#00CC66'];

										// Konversi data ke format JSON
										$labels_json = json_encode($labels);
										$data_json = json_encode($data);
										$colors_json = json_encode($colors);
										?>

										<script>
											// Mengambil data dari PHP
											var labels = <?php echo $labels_json; ?>;
											var data = <?php echo $data_json; ?>;
											var colors = <?php echo $colors_json; ?>;

											// Membuat grafik kolom dengan Chart.js
											var ctx = document.getElementById('myChart').getContext('2d');
											var myChart = new Chart(ctx, {
												type: 'bar',
												data: {
													labels: labels,
													datasets: [{
														label: 'Data',
														data: data,
														backgroundColor: colors,
														borderColor: colors,
														borderWidth: 1
													}]
												},
												options: {
													responsive: true,
													scales: {
														y: {
															beginAtZero: true
														}
													},
													plugins: {
														legend: {
															display: false
														}
													}
												}
											});
										</script>
									</div>
								</div>
							</div>
						</body>

						</html>
					</body>

					</html>

				</div>

			</div>
		

		</div>
		
		<!-- /.container-fluid -->
	</div>
	<!-- End of Main Content -->


	@endsection