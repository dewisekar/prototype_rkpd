<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url()?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/animate.css">
    <!-- <link rel="stylesheet" href="<?=base_url()?>/assets/css/style.css"> -->
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/media-queries.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/carousel.css">
    <style>
        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">
                    <a class="navbar-brand" href="#">
                        <img src="<?=base_url()?>assets/img/rpjmd.PNG" alt="">
                    </a>
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600"><b>Barenlitbang</b></span>
                                <i class="fas fa-angle-down fa-2x"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Second Topbar -->
                <div class="card shadow mb-4 rounded-0">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between rounded-0 "
                        style="background-color:rgb(36, 167, 95);border:0;">
                        <div class="dropdown py-2 mr-auto">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="background-color: rgb(29, 19, 83);border-color: rgb(29, 19, 83)">
                                Periode 2018 - 2022
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Periode 2013 - 2017</a>
                            </div>
                        </div>
                        <div class="dropdown py-2">
                            <a class="btn btn-primary " href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="background-color: rgb(29, 19, 83);border-color: rgb(29, 19, 83)">
                                <i class="fas fa-archive"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">RPJMD TC 14</a>
                                <a class="dropdown-item" href="#">RPJMD TC 16</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body" style="background-color:rgb(42, 207, 117)">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-11">
                                    <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="card-text">Meningkatkan kualitas aksebilitas dan
                                                            pemerataan
                                                            pelayanan</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <i class="fas fa-money-bill-wave"></i>
                                                        <small class="mr-auto" style="color: red">Rp.
                                                            2.550.000.000</small>

                                                        <i class="fas fa-edit float-right"></i>
                                                        <i class="fas fa-trash-alt float-right mr-2"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="card-text">Meningkatkan kualitas aksebilitas dan
                                                            pemerataan
                                                            pelayanan</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <i class="fas fa-money-bill-wave"></i>
                                                        <small class="mr-auto" style="color: red">Rp.
                                                            2.550.000.000</small>

                                                        <i class="fas fa-edit float-right"></i>
                                                        <i class="fas fa-trash-alt float-right mr-2"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="card-text">Meningkatkan kualitas aksebilitas dan
                                                            pemerataan
                                                            pelayanan</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <i class="fas fa-money-bill-wave"></i>
                                                        <small class="mr-auto" style="color: red">Rp.
                                                            2.550.000.000</small>

                                                        <i class="fas fa-edit float-right"></i>
                                                        <i class="fas fa-trash-alt float-right mr-2"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="card-text">Meningkatkan kualitas aksebilitas dan
                                                            pemerataan
                                                            pelayanan</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <i class="fas fa-money-bill-wave"></i>
                                                        <small class="mr-auto" style="color: red">Rp.
                                                            2.550.000.000</small>

                                                        <i class="fas fa-edit float-right"></i>
                                                        <i class="fas fa-trash-alt float-right mr-2"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="card-text">Meningkatkan kualitas aksebilitas dan
                                                            pemerataan
                                                            pelayanan</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <i class="fas fa-money-bill-wave"></i>
                                                        <small class="mr-auto" style="color: red">Rp.
                                                            2.550.000.000</small>

                                                        <i class="fas fa-edit float-right"></i>
                                                        <i class="fas fa-trash-alt float-right mr-2"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="card-text">Meningkatkan kualitas aksebilitas dan
                                                            pemerataan
                                                            pelayanan</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <i class="fas fa-money-bill-wave"></i>
                                                        <small class="mr-auto" style="color: red">Rp.
                                                            2.550.000.000</small>

                                                        <i class="fas fa-edit float-right"></i>
                                                        <i class="fas fa-trash-alt float-right mr-2"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="card-text">Meningkatkan kualitas aksebilitas dan
                                                            pemerataan
                                                            pelayanan</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <i class="fas fa-money-bill-wave"></i>
                                                        <small class="mr-auto" style="color: red">Rp.
                                                            2.550.000.000</small>

                                                        <i class="fas fa-edit float-right"></i>
                                                        <i class="fas fa-trash-alt float-right mr-2"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="card-text">Meningkatkan kualitas aksebilitas dan
                                                            pemerataan
                                                            pelayanan</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <i class="fas fa-money-bill-wave"></i>
                                                        <small class="mr-auto" style="color: red">Rp.
                                                            2.550.000.000</small>

                                                        <i class="fas fa-edit float-right"></i>
                                                        <i class="fas fa-trash-alt float-right mr-2"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-example" role="button"
                                            data-slide="prev">
                                            <i class="fas fa-arrow-circle-left fa-3x" style="color: black"></i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-example" role="button"
                                            data-slide="next">
                                            <i class="fas fa-arrow-circle-right fa-3x" style="color: black"></i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-1 text-center">
                                    <button class="btn btn-primary btn-lg h-100" style="vertical-align: middle;background-color: rgb(29, 19, 83);border-color: rgb(29, 19, 83)"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End of second Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card my-4" style="border:0">
                        <div class="card-header" style="background-color: white;border:0">
                            <a class="mr-auto" style="color: rgb(0, 155, 155);font-size: 20px">Tujuan</a>

                            <i class="fas fa-angle-up float-right my-1"></i>
                            <i class="fas fa-plus float-right my-1 mr-3"></i>
                            <i class="fas fa-edit float-right my-1 mr-2"></i>
                            <i class="fas fa-trash-alt float-right my-1 mr-2"></i>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9" style="background-color: rgb(170, 235, 221)">
                                    <div class="my-3">
                                        <a style="font-size: 16px">1. Terwujudnya peningkatan kualitas, aksesbilitas,
                                            dan pemerataan pelayanan pendidikan</a>
                                    </div>
                                </div>
                                <div class="col-3" style="background-color: rgb(235, 137, 72)">
                                    <div class="my-3">
                                        <a class="mr-auto" style="color:white;font-size: 16px">Rp 2.550.000.000</a>
                                        <i class="fas fa-angle-up float-right my-1 mr-2" style="color:white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">Indikator Tujuan</th>
                                            <th scope="col">Satuan</th>
                                            <th scope="col">Kondisi Awal</th>
                                            <th scope="col">2018</th>
                                            <th scope="col">2019</th>
                                            <th scope="col">2020</th>
                                            <th scope="col">2021</th>
                                            <th scope="col">2022</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><b>Angka Melek Huruf</b></td>
                                            <td>%</td>
                                            <td>99.71</td>
                                            <td>99.88</td>
                                            <td>99.9</td>
                                            <td>99.92</td>
                                            <td>99.94</td>
                                            <td>99.95</td>
                                        </tr>
                                        <tr>
                                            <td><b>Angka Lulus SMP/Mts</b></td>
                                            <td>%</td>
                                            <td>99.63</td>
                                            <td>99.63</td>
                                            <td>99.64</td>
                                            <td>99.66</td>
                                            <td>99.67</td>
                                            <td>99.68</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row mb-3">
                                <div class="col-9" style="background-color: rgb(235, 235, 235)">
                                    <div class="my-3">
                                        <a style="font-size: 16px">2. Terwujudnya peningkatan kualitas pengajar tingkat
                                            SMA</a>
                                    </div>
                                </div>
                                <div class="col-3" style="background-color: rgb(235, 137, 72)">
                                    <div class="my-3">
                                        <a class="mr-auto" style="color:white;font-size: 16px">Rp 2.550.000.000</a>
                                        <i class="fas fa-angle-down float-right my-1 mr-2" style="color:white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-9" style="background-color: rgb(235, 235, 235)">
                                    <div class="my-3">
                                        <a style="font-size: 16px">3. Terwujudnya peningkatan mutu didik</a>
                                    </div>
                                </div>
                                <div class="col-3" style="background-color: rgb(235, 137, 72)">
                                    <div class="my-3">
                                        <a class="mr-auto" style="color:white;font-size: 16px">Rp 2.550.000.000</a>
                                        <i class="fas fa-angle-down float-right my-1 mr-2" style="color:white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card my-4" style="border:0">
                        <div class="card-header" style="background-color: white;border:0">
                            <a class="mr-auto" style="color: rgb(0, 155, 155);font-size: 20px">Sasaran</a>

                            <i class="fas fa-angle-up float-right my-1"></i>
                            <i class="fas fa-plus float-right my-1 mr-3"></i>
                            <i class="fas fa-edit float-right my-1 mr-2"></i>
                            <i class="fas fa-trash-alt float-right my-1 mr-2"></i>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9" style="background-color: rgb(170, 235, 221)">
                                    <div class="my-3">
                                        <a style="font-size: 16px">1. Meningkatkan Kualitas,aksebilitas dan pemerataan
                                            pelayanan pendidikan</a>
                                    </div>
                                </div>
                                <div class="col-3" style="background-color: rgb(235, 137, 72)">
                                    <div class="my-3">
                                        <a class="mr-auto" style="color:white;font-size: 16px">Rp 2.550.000.000</a>
                                        <i class="fas fa-angle-up float-right my-1 mr-2" style="color:white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">Indikator Tujuan</th>
                                            <th scope="col">Satuan</th>
                                            <th scope="col">Kondisi Awal</th>
                                            <th scope="col">2018</th>
                                            <th scope="col">2019</th>
                                            <th scope="col">2020</th>
                                            <th scope="col">2021</th>
                                            <th scope="col">2022</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><b>Angka Partisipasi Kasar SD/MI</b></td>
                                            <td>%</td>
                                            <td>99.63</td>
                                            <td>99.63</td>
                                            <td>99.64</td>
                                            <td>99.66</td>
                                            <td>99.67</td>
                                            <td>99.68</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row mb-3">
                                <div class="col-9" style="background-color: rgb(235, 235, 235)">
                                    <div class="my-3">
                                        <a style="font-size: 16px">2. Terwujudnya peningkatan kualitas pengajar Tingkat
                                            SMA</a>
                                    </div>
                                </div>
                                <div class="col-3" style="background-color: rgb(235, 137, 72)">
                                    <div class="my-3">
                                        <a class="mr-auto" style="color:white;font-size: 16px">Rp 2.550.000.000</a>
                                        <i class="fas fa-angle-down float-right my-1 mr-2" style="color:white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-9" style="background-color: rgb(235, 235, 235)">
                                    <div class="my-3">
                                        <a style="font-size: 16px">1. Terwujudnya peningkatan mutu didik</a>
                                    </div>
                                </div>
                                <div class="col-3" style="background-color: rgb(235, 137, 72)">
                                    <div class="my-3">
                                        <a class="mr-auto" style="color:white;font-size: 16px">Rp 2.550.000.000</a>
                                        <i class="fas fa-angle-down float-right my-1 mr-2" style="color:white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card my-4" style="border:0">
                        <div class="card-header" style="background-color: white;border:0">
                            <a class="mr-auto" style="color: rgb(0, 155, 155);font-size: 20px">Program</a>

                            <i class="fas fa-angle-up float-right my-1"></i>
                            <i class="fas fa-plus float-right my-1 mr-3"></i>
                            <i class="fas fa-edit float-right my-1 mr-2"></i>
                            <i class="fas fa-trash-alt float-right my-1 mr-2"></i>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-sm">
                                <thead class="text-center">
                                    <tr>
                                        <th class="align-middle" scope="col" rowspan="2">Kode</th>
                                        <th class="align-middle" scope="col" rowspan="2">Indikator Program</th>
                                        <th class="align-middle" scope="col" rowspan="2">Satuan</th>
                                        <th class="align-middle" scope="col" rowspan="2">Kondisi Awal</th>
                                        <th class="align-middle" scope="col" colspan="2">2018</th>
                                        <th class="align-middle" scope="col" colspan="2">2019</th>
                                        <th class="align-middle" scope="col" colspan="2">2020</th>
                                        <th class="align-middle" scope="col" colspan="2">2021</th>
                                        <th class="align-middle" scope="col" colspan="2">2022</th>
                                        <th class="align-middle" scope="col" rowspan="2">OPD</th>
                                    </tr>
                                    <tr>
                                        <!-- <th scope="col">#</th> -->
                                        <th class="align-middle" scope="col">Target</th>
                                        <th class="align-middle" scope="col">RP</th>
                                        <th class="align-middle" scope="col">Target</th>
                                        <th class="align-middle" scope="col">RP</th>
                                        <th class="align-middle" scope="col">Target</th>
                                        <th class="align-middle" scope="col">RP</th>
                                        <th class="align-middle" scope="col">Target</th>
                                        <th class="align-middle" scope="col">RP</th>
                                        <th class="align-middle" scope="col">Target</th>
                                        <th class="align-middle" scope="col">RP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">0001</td>
                                        <td class="align-middle">Peningkatan Mutu Layanan dan Manajemen Pendidikan</td>
                                        <td class="align-middle"></td>
                                        <td class="align-middle"></td>
                                        <td class="align-middle"></td>
                                        <td class="align-middle" style="background-color: rgb(252, 193, 193)">
                                            510.000.000</td>
                                        <td class="align-middle"></td>
                                        <td class="align-middle" style="background-color: rgb(252, 193, 193)">
                                            510.000.000</td>
                                        <td class="align-middle"></td>
                                        <td class="align-middle" style="background-color: rgb(252, 193, 193)">
                                            510.000.000</td>
                                        <td class="align-middle"></td>
                                        <td class="align-middle" style="background-color: rgb(252, 193, 193)">
                                            510.000.000</td>
                                        <td class="align-middle"></td>
                                        <td class="align-middle" style="background-color: rgb(252, 193, 193)">
                                            510.000.000</td>
                                        <td class="align-middle">Dinas Pendidikan</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle"></td>
                                        <td class="align-middle">Pembangunan Sekolah</td>
                                        <td class="align-middle">%</td>
                                        <td class="align-middle">1000</td>
                                        <td class="align-middle">1100</td>
                                        <td class="align-middle" style="background-color: rgb(252, 193, 193)">
                                            <input type="number" class="form-control" value="500000000">
                                        </td>
                                        <td class="align-middle">1100</td>
                                        <td class="align-middle" style="background-color: rgb(252, 193, 193)">
                                            <input type="number" class="form-control" value="500000000">
                                        </td>
                                        <td class="align-middle">1100</td>
                                        <td class="align-middle" style="background-color: rgb(252, 193, 193)">
                                            <input type="number" class="form-control" value="500000000">
                                        </td>
                                        <td class="align-middle">1100</td>
                                        <td class="align-middle" style="background-color: rgb(252, 193, 193)">

                                            <input type="number" class="form-control" value="500000000">
                                        </td>
                                        <td class="align-middle">1100</td>
                                        <td class="align-middle" style="background-color: rgb(252, 193, 193)">

                                            <input type="number" class="form-control" value="500000000">
                                        </td>
                                        <td class="align-middle">Dinas Pendidikan</td>
                                    </tr>

                                    <tr>
                                        <td class="align-middle"></td>
                                        <td class="align-middle">Presentase Kepala SD berkualifikasi S1</td>
                                        <td class="align-middle">%</td>
                                        <td class="align-middle">100</td>
                                        <td class="align-middle">100</td>
                                        <td class="align-middle" style="background-color: rgb(252, 193, 193)">
                                            <input type="number" class="form-control" value="10000000">
                                        </td>
                                        <td class="align-middle">100</td>
                                        <td class="align-middle" style="background-color: rgb(252, 193, 193)">
                                            <input type="number" class="form-control" value="10000000">
                                        </td>
                                        <td class="align-middle">100</td>
                                        <td class="align-middle" style="background-color: rgb(252, 193, 193)">
                                            <input type="number" class="form-control" value="10000000">
                                        </td>
                                        <td class="align-middle">100</td>
                                        <td class="align-middle" style="background-color: rgb(252, 193, 193)">

                                            <input type="number" class="form-control" value="10000000">
                                        </td>
                                        <td class="align-middle">100</td>
                                        <td class="align-middle" style="background-color: rgb(252, 193, 193)">

                                            <input type="number" class="form-control" value="10000000">
                                        </td>
                                        <td class="align-middle">Dinas Pendidikan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url()?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url()?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url()?>/assets/js/sb-admin-2.min.js"></script>
    <script src="<?=base_url()?>/assets/js/caraousel.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url()?>/assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url()?>/assets/js/demo/chart-area-demo.js"></script>
    <script src="<?=base_url()?>/assets/js/demo/chart-pie-demo.js"></script>

    <!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->
    <!-- <script src="assets/js/jquery-migrate-3.0.0.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> -->
    <script src="<?=base_url()?>/assets/js/jquery.backstretch.min.js"></script>
    <script src="<?=base_url()?>/assets/js/wow.min.js"></script>
    <script src="<?=base_url()?>/assets/js/scripts.js"></script>
</body>

</html>