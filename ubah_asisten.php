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
			<li class="nav-item active">
				<a class="nav-link" href="tampil_asisten.php">
					<i class="fas fa-fw fa-user-plus"></i>
					<span>Asisten</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="tampil_ruangan.php">
					<i class="fas fa-fw fa-bars"></i>
					<span>Ruangan</span></a>
			</li>
			<li class="nav-item">
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
					<h1 class="h3 mb-2 text-gray-800">Data Asisten</h1>

					<!-- DataTales Example -->
					<div class="card o-hidden border-0 shadow-lg my-5">
						<div class="card-body p-0">
							<!-- Nested Row within Card Body -->
							<div class="row justify-content-center">
								<div class="col-lg-6">
									<div class="p-5">
										<div class="text-center">
											<h1 class="h4 text-gray-900 mb-4">Update Data Asisten!</h1>
										</div>
										<?php
										include 'koneksi.php';
										$id_asisten = $_GET['id'];
										$data = mysqli_query($koneksi, "select * from asistenlab where id_asisten='$id_asisten'");
										while ($d = mysqli_fetch_array($data)) {
										?>
											<form class="user" action="update_asisten.php" method="post" enctype="multipart/form-data">
												<input type="hidden" name="id_asisten" value="<?php echo $d['id_asisten']; ?>">
												<div class="input-group">
													<label for="id_asisten" class="col-form-label">ID Asisten</label>
												</div>
												<div class="input-group mb-4">
													<input type="text" class="form-control" name="id_asisten" id="id_asisten" placeholder="ID Asisten" value="<?php echo $d['id_asisten']; ?>">
												</div>
												<div class="input-group">
													<label for="nama" class="col-form-label">Nama Asisten</label>
												</div>
												<div class="input-group mb-4">
													<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Asisten" value="<?php echo $d['nama']; ?>">
												</div>
												<div class="input-group">
													<label for="gender" class="col-form-label">Gender</label>
												</div>
												<div class="input-group mb-4">
													<input type="text" class="form-control" name="gender" id="gender" placeholder="Gender" value="<?php echo $d['gender']; ?>">
												</div>
												<div class="input-group">
													<label for="email" class="col-form-label">Email</label>
												</div>
												<div class="input-group mb-4">
													<input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $d['email']; ?>">
												</div>
												<div class="input-group">
													<label for="telepon" class="col-form-label">Telepon</label>
												</div>
												<div class="input-group mb-4">
													<input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon" value="<?php echo $d['telepon']; ?>">
												</div>
												<div class="input-group">
													<label for="alamat" class="col-form-label">Alamat</label>
												</div>
												<div class="input-group mb-4">
													<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $d['alamat']; ?>">
												</div>
												<div class="row justify-content-between">
													<div class="col-md-4">
														<a href="tambah_asisten.php" class="btn btn-danger btn-user btn-block">
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