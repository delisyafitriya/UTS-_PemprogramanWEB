<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>PrakKampus</title>

	<!-- Custom fonts for this template -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/sb-admin-2.min.css" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script src="vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="js/demo/datatables-demo.js"></script>
</head>

<body>

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

				<div class="sidebar-brand-text mx-3">PrakKampus</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item">
				<a class="nav-link" href="dashboard.php">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Data
			</div>

			<li class="nav-item">
				<a class="nav-link" href="tampilmhs.php">
					<i class="fas fa-fw fa-user"></i>
					<span>Mahasiswa</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="tampil_dosen.php">
					<i class="fas fa-fw fa-graduation-cap"></i>
					<span>Dosen</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="tampil_asisten.php">
					<i class="fas fa-fw fa-user-plus"></i>
					<span>Asisten</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="tampil_ruangan.php">
					<i class="fas fa-fw fa-bars"></i>
					<span>Ruangan</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="tampil_jadwal.php">
					<i class="fas fa-fw fa-book"></i>
					<span>Jadwal Praktikum</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="tampil_pengambilan.php">
					<i class="fas fa-fw fa-pen"></i>
					<span>Pengambilan Praktikum</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<li class="nav-item">
				<a class="nav-link" href="fromlogin.php">
					<i class="fas fa-fw fa-sign-out"></i>
					<span>Sign Out</span></a>
			</li>



		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<form class="form-inline">
						<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
							<i class="fa fa-bars"></i>
						</button>
					</form>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
								<img class="img-profile rounded-circle" src="img/undraw_profile.svg">
							</a>
							
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">Data Jadwal</h1>

					<!-- DataTales Example -->
					<div class="card o-hidden border-0 shadow-lg my-5">
						<div class="card-body p-0">
							<!-- Nested Row within Card Body -->
							<div class="row justify-content-center">
								<div class="col-lg-6">
									<div class="p-5">
										<div class="text-center">
											<h1 class="h4 text-gray-900 mb-4">Update Data Jadwal!</h1>
										</div>
										<?php
										include 'koneksi.php';
										$id_jadwal = $_GET['id'];
										$data = mysqli_query($koneksi, "SELECT * FROM jadwal_prk WHERE id_jadwal='$id_jadwal'");
										while ($d = mysqli_fetch_array($data)) {
										?>
											<form class="user" action="update_jadwal.php" method="post" enctype="multipart/form-data">
												<input type="hidden" name="id_jadwal" value="<?php echo $d['id_jadwal']; ?>">
												<div class="input-group">
													<label for="id_jadwal" class="col-form-label">ID Jadwal</label>
												</div>
												<div class="input-group mb-4">
													<input type="text" class="form-control" name="id_jadwal" id="id_jadwal" placeholder="ID Jadwal" value="<?php echo $d['id_jadwal']; ?>">
												</div>
												<div class="input-group">
													<label for="mata_kuliah" class="col-form-label">Mata Kuliah</label>
												</div>
												<div class="input-group mb-4">
													<input type="text" class="form-control" name="mata_kuliah" id="mata_kuliah" placeholder="Mata Kuliah" value="<?php echo $d['mata_kuliah']; ?>">
												</div>
												<div class="input-group">
													<label for="hari" class="col-form-label">Hari</label>
												</div>
												<div class="input-group mb-4">
													<input type="text" class="form-control" name="hari" id="hari" placeholder="Hari" value="<?php echo $d['hari']; ?>">
												</div>
												<div class="input-group">
													<label for="jam_mulai" class="col-form-label">Jam Mulai</label>
												</div>
												<div class="input-group mb-4">
													<input type="text" class="form-control" name="jam_mulai" id="jam_mulai" placeholder="Jam Mulai" value="<?php echo $d['jam_mulai']; ?>">
												</div>
												<div class="input-group">
													<label for="jam_selesai" class="col-form-label">Jam Selesai</label>
												</div>
												<div class="input-group mb-4">
													<input type="text" class="form-control" name="jam_selesai" id="jam_selesai" placeholder="Jam Selesai" value="<?php echo $d['jam_selesai']; ?>">
												</div>
												<div class="input-group">
													<label for="kelas" class="col-form-label">Kelas</label>
												</div>
												<div class="input-group mb-4">
													<input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas" value="<?php echo $d['kelas']; ?>">
												</div>
												<div class="input-group">
													<label for="id_ruangan" class="col-form-label">ID Ruangan</label>
												</div>
												<div class="input-group mb-4">
													<input type="text" class="form-control" name="id_ruangan" id="id_ruangan" placeholder="ID Ruangan" value="<?php echo $d['id_ruangan']; ?>">
												</div>
												<div class="input-group">
													<label for="nidn" class="col-form-label">NIDN</label>
												</div>
												<div class="input-group mb-4">
													<input type="text" class="form-control" name="nidn" id="nidn" placeholder="NIDN" value="<?php echo $d['nidn']; ?>">
												</div>
												<div class="row justify-content-between">
													<div class="col-md-4">
														<a href="tampil_jadwal.php" class="btn btn-danger btn-user btn-block">
															Batal
														</a>
													</div>
													<div class="col-md-4">
														<button type="submit" class="btn btn-primary btn-user btn-block">
															Submit
														</button>
													</div>
												</div>
											</form>
										<?php
										}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->



		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>


</body>

</html>