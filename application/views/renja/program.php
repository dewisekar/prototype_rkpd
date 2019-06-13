<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("partials/head.php") ?>
    <link href="<?=base_url()?>/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">                
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-0 static-top shadow" style="background-color: orange;">


                    <a href="<?=base_url()?>" class="btn btn-icon-split text-left" style="background-color: orange; color: white; font-size: 20x">
                        RENJA<br>
                        Plafon Anggaran
                    </a>
                    <a href="<?=base_url()?>renja/plafonanggaranopd" class="btn btn-icon-split ml-5" style="background-color: orange">
                        <span class="text" style="color: white">Plafon Anggaran</span>
                    </a>
                    <a href="<?=base_url()?>renja/program" class="btn btn-light btn-icon-split ml-2">
                        <span class="text">Program</span>
                    </a>
                    <a href="<?=base_url()?>renja/kegiatan" class="btn btn-icon-split ml-2" style="background-color: orange">
                        <span class="text" style="color: white">Kegiatan</span>
                    </a>
                    <a href="<?=base_url()?>renja/penetapan" class="btn btn-icon-split ml-2" style="background-color: orange">
                        <span class="text" style="color: white">Penetapan</span>
                    </a>
                    <a href="<?=base_url()?>renja/laporan" class="btn btn-icon-split ml-2" style="background-color: orange">
                        <span class="text" style="color: white">Laporan</span>
                    </a>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white" style="font-size: 25px">Barenlitbang</span>
                                <i class="fas fa-caret-down fa-lg fa-fw mr-2 text-white"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid pl-0 pr-0">
                    <!-- Page Wrapper -->
                    <div id="wrapper">

                        <!-- Sidebar -->
                        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: orange">

                            <!-- Sidebar - Brand -->
                            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                                <div class="sidebar-brand-icon rotate-n-15">
                                <i class="fas fa-laugh-wink"></i>
                                </div>
                                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
                            </a>

                            <!-- Divider -->
                            <hr class="sidebar-divider my-0">

                            <!-- Nav Item - Dashboard -->
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">
                                <i class="fas fa-fw fa-tachometer-alt"></i>
                                <span>Dashboard</span></a>
                            </li>

                            <!-- Divider -->
                            <hr class="sidebar-divider">

                            <!-- Heading -->
                            <div class="sidebar-heading">
                                Interface
                            </div>

                            <!-- Nav Item - Pages Collapse Menu -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-cog"></i>
                                <span>Components</span>
                                </a>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Custom Components:</h6>
                                    <a class="collapse-item" href="buttons.html">Buttons</a>
                                    <a class="collapse-item" href="cards.html">Cards</a>
                                </div>
                                </div>
                            </li>

                            <!-- Nav Item - Utilities Collapse Menu -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                                <i class="fas fa-fw fa-wrench"></i>
                                <span>Utilities</span>
                                </a>
                                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Custom Utilities:</h6>
                                    <a class="collapse-item" href="utilities-color.html">Colors</a>
                                    <a class="collapse-item" href="utilities-border.html">Borders</a>
                                    <a class="collapse-item" href="utilities-animation.html">Animations</a>
                                    <a class="collapse-item" href="utilities-other.html">Other</a>
                                </div>
                                </div>
                            </li>

                            <!-- Divider -->
                            <hr class="sidebar-divider">

                            <!-- Heading -->
                            <div class="sidebar-heading">
                                Addons
                            </div>

                            <!-- Nav Item - Pages Collapse Menu -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                                <i class="fas fa-fw fa-folder"></i>
                                <span>Pages</span>
                                </a>
                                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Login Screens:</h6>
                                    <a class="collapse-item" href="login.html">Login</a>
                                    <a class="collapse-item" href="register.html">Register</a>
                                    <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                                    <div class="collapse-divider"></div>
                                    <h6 class="collapse-header">Other Pages:</h6>
                                    <a class="collapse-item" href="404.html">404 Page</a>
                                    <a class="collapse-item" href="blank.html">Blank Page</a>
                                </div>
                                </div>
                            </li>

                            <!-- Nav Item - Charts -->
                            <li class="nav-item">
                                <a class="nav-link" href="charts.html">
                                <i class="fas fa-fw fa-chart-area"></i>
                                <span>Charts</span></a>
                            </li>

                            <!-- Nav Item - Tables -->
                            <li class="nav-item">
                                <a class="nav-link" href="tables.html">
                                <i class="fas fa-fw fa-table"></i>
                                <span>Tables</span></a>
                            </li>

                            <!-- Divider -->
                            <hr class="sidebar-divider d-none d-md-block">

                            <!-- Sidebar Toggler (Sidebar) -->
                            <div class="text-center d-none d-md-inline">
                                <button class="rounded-circle border-0" id="sidebarToggle"></button>
                            </div>

                        </ul>
                        <!-- End of Sidebar -->

                        <!-- Content Wrapper -->
                        <div id="content-wrapper" class="d-flex flex-column">

                            <!-- Main Content -->
                            <div id="content">                           

                                <!-- Begin Page Content -->
                                <div class="container-fluid pt-5 p-0 pr-0">

                                    <div class="row mr-1 ml-3 mb-0">

                                        <div class="col-md-12">
                                            <nav class="navbar navbar-expand navbar-light bg-transparent mb-4 pl-0 pr-0">
                                                <p class="h5 mb-0 text-gray-800">Program Pembangunan Daerah</p>
                                                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                                    <div class="input-group">
                                                    <input type="text" class="form-control bg-light border-1 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary" type="button">
                                                        <i class="fas fa-search fa-sm"></i>
                                                        </button>
                                                    </div>
                                                    </div>
                                                </form>
                                                <ul class="navbar-nav ml-auto">
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        History 
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Verifikasi
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link" href="#">Tambah Program</a>
                                                    </li>
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link" href="#">Ubah</a>
                                                    </li>
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link" href="#">Hapus</a>
                                                    </li>
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link" href="#">Cetak</a>
                                                    </li>
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link" href="#">Detail Program</a>
                                                    </li>
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link" href="#">Salin Data</a>
                                                    </li>
                                                </ul>
                                            </nav>


                                        </div>
                                    </div>

                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead class="text-center">
                                                        <tr>
                                                            <th style="width: 5%" rowspan="2">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                                                    <label class="custom-control-label" for="customCheck"></label>
                                                                </div>
                                                            </th>
                                                            <th style="width: 5%" rowspan="2">No.</th>
                                                            <th style="width: 60%" colspan="2">Program</th>
                                                            <th>Indikator Kerja</th>
                                                            <th>Pagu Indikator</th>
                                                        </tr>
                                                        <tr>
                                                            <th style="width: 10%">Kode</th>
                                                            <th>Program</th>
                                                            <th>Target</th>
                                                            <th>Target</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="example14">
                                                                    <label class="custom-control-label" for="customCheck1"></label>
                                                                </div>
                                                            </td>
                                                            <td>1.</td>
                                                            <td>[1.01.01]</td>
                                                            <td>Dinas Pendidikan</td>
                                                            <td>150000000</td>
                                                            <td>150000000</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck2" name="example12">
                                                                    <label class="custom-control-label" for="customCheck2"></label>
                                                                </div>
                                                            </td>
                                                            <td>2.</td>
                                                            <td>[1.01.01]</td>
                                                            <td>Dinas Pekerjaan Umum dan Tata Ruang</td>
                                                            <td>150000000</td>
                                                            <td>150000000</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck3" name="example13">
                                                                    <label class="custom-control-label" for="customCheck3"></label>
                                                                </div>
                                                            </td>
                                                            <td>3.</td>
                                                            <td>[1.01.01]</td>
                                                            <td>Dinas Kesehatan</td>
                                                            <td>150000000</td>
                                                            <td>150000000</td>
                                                        </tr>                    
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
                </div>    
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

    <?php $this->load->view("partials/script.php") ?>   

    <!-- Page level plugins -->
    <script src="<?=base_url()?>/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
</body>

</html>
