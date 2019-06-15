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
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color: orange">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a href="<?=base_url()?>" class="btn btn-icon-split text-left" style="background-color: orange; color: white; font-size: 20x">
                        RENJA<br>
                        Plafon Anggaran
                    </a>
                    <a href="<?=base_url()?>renja/plafonanggaranopd" class="btn btn-light btn-icon-split ml-5">
                        <span class="text">Plafon Anggaran</span>
                    </a>
                    <a href="<?=base_url()?>renja/program" class="btn btn-icon-split ml-2" style="background-color: orange">
                        <span class="text" style="color: white">Program</span>
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
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-3">
                        <h1 class="h4 mt-2 text-gray-800">Plafon Anggaran</h1>
                        <a href="#" class="text text-gray">Terbitkan</a>
                    </div>

                    <!-- Page Heading -->
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%">No.</th>
                                            <th style="width: 10%">Kode</th>
                                            <th style="width: 60%">OPD</th>
                                            <th>Plafon Anggaran</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode</th>
                                            <th>OPD</th>
                                            <th>Plafon Anggaran</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>[1.01.01]</td>
                                            <td>Dinas Pendidikan</td>
                                            <td>150000000</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>[1.01.01]</td>
                                            <td>Dinas Pekerjaan Umum dan Tata Ruang</td>
                                            <td>150000000</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>[1.01.01]</td>
                                            <td>Dinas Kesehatan</td>
                                            <td>150000000</td>
                                        </tr>                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


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
    <script src="<?=base_url()?>/assets/js/demo/datatables-demo.js"></script>
</body>

</html>
