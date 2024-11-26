<!DOCTYPE html>

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
					<div class="card shadow mb-4">
						<div class="card-header py-3 align-self-end">
							<a href="tambah_asisten.php" class="btn btn-primary btn-sm">Add</a>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>No</th>
											<th>ID Asisten</th>
											<th>Nama Asisten</th>
											<th>Gender</th>
											<th>Email</th>
											<th>Telepon</th>
											<th>Password</th>
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>No</th>
											<th>ID Asisten</th>
											<th>Nama Asisten</th>
											<th>Gender</th>
											<th>Email</th>
											<th>Telepon</th>
											<th>Alamat</th>
											<th>Action</th>
										</tr>
									</tfoot>
									<tbody>
										<?php
										include 'koneksi.php';
										$no = 1;
										$data = mysqli_query($koneksi, "select * from asistenlab");
										while ($d = mysqli_fetch_array($data)) {
										?>
											<tr>
												<td><?php echo $no++; ?></td>
												<td><?php echo $d['id_asisten']; ?></td>
												<td><?php echo $d['nama']; ?></td>
												<td><?php echo $d['gender']; ?></td>
												<td><?php echo $d['email']; ?></td>
												<td><?php echo $d['telepon']; ?></td>
												<td><?php echo $d['alamat']; ?></td>
												<td>
													<a href="ubah_asisten.php?id=<?php echo $d['id_asisten']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
													<a href="hapus_asisten.php?id=<?php echo $d['id_asisten']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
												</td>
											</tr>
										<?php
										}
										?>
									</tbody>
								</table>
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



	<div class="d-flex justify-content-start align-items-center gap-2">
		<!-- Button BACK -->
		<form method="POST" action="dashboard.php">
			<button type="input" class="btn btn-outline-primary">BACK</button>
		</form>

		<!-- Button ADD -->
		<a role="button" class="btn btn-outline-dark" href="tambah_asisten.php">ADD</a>
	</div>
	<table class="table table-striped">
		<tr>
			<th>No</th>
			<th>ID Asisten</th>
			<th>Nama Asisten</th>
			<th>Gender</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Alamat</th>

			<th>Aksi</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi, "select * from asistenlab");
		while ($d = mysqli_fetch_array($data)) {
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_asisten']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['gender']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['telepon']; ?></td>
				<td><?php echo $d['alamat']; ?></td>

				<td>
					<a role="button" class="btn btn-info" href="ubah_asisten.php?id=<?php echo $d['id_asisten']; ?>">UPDATE</a> </button>
					<a role="button" class="btn btn-danger" href="hapus_asisten.php?id=<?php echo $d['id_asisten']; ?>">REMOVE</a>

				</td>
			</tr>
		<?php
		}
		?>
	</table>
</body>

</html>