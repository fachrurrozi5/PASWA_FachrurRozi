<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PASWA 2022</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="asset/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="asset/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="asset/css/style.css" rel="stylesheet">
</head>

<body>

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img class="rounded-circle" src="asset/img/paswa.png" alt="" style="width: 40px; height: 40px;"></i>PASWA 2022</h3>
                </a>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link <?php if ($uriSegments[2] == "dashboard.php"){echo "active";}?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="panitia_index.php" class="nav-item nav-link <?php if ($uriSegments[2] == "panitia.php"){echo "active";}?>"><i class="fa fa-keyboard me-2"></i>Data Panitia</a>
                    <a href="kelompok_index.php" class="nav-item nav-link <?php if ($uriSegments[2] == "kelompok.php"){echo "active";}?>"><i class="fa fa-table me-2"></i>Data Kelompok</a>
                    <a href="peserta_index.php" class="nav-item nav-link <?php if ($uriSegments[2] == "peserta.php"){echo "active";}?>"><i class="fa fa-th me-2"></i>Data Peserta</a>
                    <a href="kegiatan_index.php" class="nav-item nav-link <?php if ($uriSegments[2] == "kegiatan.php"){echo "active";}?>"><i class="fa fa-th me-2"></i>Data Kegiatan</a>
                    <a href="data_tamu_index.php" class="nav-item nav-link <?php if ($uriSegments[2] == "tamu.php"){echo "active";}?>"><i class="fa fa-th me-2"></i>Data Tamu</a>
                    <a href="tata_tertib_index.php" class="nav-item nav-link <?php if ($uriSegments[2] == "tata_tertib.php"){echo "active";}?>"><i class="fa fa-th me-2"></i>Tata Tertib</a>
                    <a href="perlengkapan_index.php" class="nav-item nav-link <?php if ($uriSegments[2] == "perlengkapan.php"){echo "active";}?>"><i class="fa fa-th me-2"></i>Perlengkapan</a>
                    <a href="peserta_kelompok_index.php" class="nav-item nav-link <?php if ($uriSegments[2] == "nama_kelompok.php"){echo "active";}?>"><i class="fa fa-th me-2"></i>Data Peserta - Kelompok</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

                <!-- Content Start -->
                <div class="content">
                       <!-- Navbar Start -->
                       <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="login.php" class="nav-link">
                            <span class="d-none d-lg-inline-flex">Login Admin</span>
                        </a>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="registrasi.php" class="nav-link">
                            <span class="d-none d-lg-inline-flex">Registrasi Peserta</span>
                        </a>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-white rounded h-100 p-4">
                            <h3 class="mb-4 text-dark">Data Kelompok Paswa 2022</h3>
                            <div class="table-responsive">
                                <table class="table " id="datatable">
                                <thead>
                        <tr>
                            
                            <td  class="text-dark"> No.</td>
                            <td class="text-dark"> Nama Kelompok</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("connection.php");
                        $no = 0;
                        $result = mysqli_query($mysqli, "SELECT * FROM tab_kelompok");
                        while ($row = mysqli_fetch_array($result)) {
                            $no++;
                            echo "<tr>";
                            echo "<td class='text-dark'>" . $no . "</td>";
                            echo "<td class='text-dark'>" . $row['nama_kelompok'] . "</td>";
                        }
                        ?>
                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
        
<!-- Footer Start -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="index.php">PASWA 2022 </a>, All Right Reserved. 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="index.php" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="asset/lib/chart/chart.min.js"></script>
    <script src="asset/lib/easing/easing.min.js"></script>
    <script src="asset/lib/waypoints/waypoints.min.js"></script>
    <script src="asset/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="asset/lib/tempusdominus/js/moment.min.js"></script>
    <script src="asset/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="asset/js/main.js"></script>
</body>

</html>