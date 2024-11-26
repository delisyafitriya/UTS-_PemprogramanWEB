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
            <li class="nav-item active">
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
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="fromlogin.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->\<div class="row justify-content-around">

                    <!-- Earnings (Monthly) Card Example -->
                    <?php
                    require_once 'koneksi.php';
                    $mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                    $mhs = mysqli_num_rows($mahasiswa);

                    $dosen = mysqli_query($koneksi, "SELECT * FROM dosen");
                    $dsn = mysqli_num_rows($dosen);

                    $asistenlab = mysqli_query($koneksi, "SELECT * FROM asistenlab");
                    $ast = mysqli_num_rows($asistenlab);

                    $ruangan = mysqli_query($koneksi, "SELECT * FROM ruangan");
                    $rgn = mysqli_num_rows($ruangan);

                    $jadwal_prk = mysqli_query($koneksi, "SELECT * FROM jadwal_prk");
                    $jdl = mysqli_num_rows($jadwal_prk);

                    $pengambilan_prk = mysqli_query($koneksi, "SELECT * FROM pengambilan_prk");
                    $pgl = mysqli_num_rows($pengambilan_prk);

                    ?>


                    <div class="col-xl-5 col-md-6 mb-4">
                        <a href="#">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Jumlah</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Mahasiswa: <?= $mhs; ?> </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-5 col-md-6 mb-4">
                        <a href="#">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Jumlah</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Asisten: <?= $ast; ?> </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-5 col-md-6 mb-4">
                        <a href="#">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Jumlah</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> Dosen: <?= $dsn; ?> </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-5 col-md-6 mb-4">
                        <a href="#">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Jumlah</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Ruangan: <?= $rgn; ?> </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bars fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-5 col-md-6 mb-4">
                        <a href="#">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Jumlah</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Pengambilan Praktikum: <?= $pgl; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bars fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-5 col-md-6 mb-4">
                        <a href="#">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Jumlah</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Jadwal Praktikum: <?= $jdl; ?> </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bars fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
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