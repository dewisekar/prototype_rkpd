<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('partials/head.php')?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar mb-0 static-top shadow" style="background-color: #12A89D">

          <!-- Topbar Search -->
          <img src="<?=base_url('assets/img/rkpd_logo.jpg')?>">

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white">Barenlitbang</span>
                <small>Murni, 2018</small>
                <i class="fas fa-lg fa-chevron-down"></i>
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
          <div class="card mt-0 mb-4 rounded-0">
            <div class="card-header py-3 d-flex flex-row align-items-center rounded-0">
              <div class="dropdown ml-auto">
                  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      OPD
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Example 1</a>
                      <a class="dropdown-item" href="#">Example 2</a>
                      <a class="dropdown-item" href="#">Example 3</a>
                  </div>
              </div>
              <div>
                  <a class="btn btn-rounded " href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-print"></i>
                  </a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-center">Kode</th>
                      <th class="text-center">Sasaran/ Program/ Kegiatan</th>
                      <th class="text-center">Pagu Indikatif</th>
                      <th class="text-center">OPD</th>
                      <th class="text-center"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="clickable-row">
                      <td></td>
                      <td><a href onclick="return base1()">+ Meningkatkan kualitas, aksesibilitas, dan pemerataan pelayanan pendidikan</a></td>
                      <td>1.500.000.000.000</td>
                      <td>Bidang Pembinaan</td>
                      <td><i class="fas fa-file-alt"></i></td>
                    </tr>
                    <tr style="display:none" class="parentId1">
                      <td class="text-center">[1.01.01]</td>
                      <td style="padding-left: 40px">+ Program pendidikan non formal
                      <td>400.000.000.000</td>
                      <td>Bidang Pembinaan</td>
                      <td><i class="fas fa-file-alt"></i></td>
                    </tr>
                    <tr style="display:none" class="parentId1">
                      <td class="text-center">[1.01.02]</td>
                      <td style="padding-left: 40px">+ Program pendidikan formal
                      <td>500.000.000.000</td>
                      <td>Bidang Pembinaan</td>
                      <td><i class="fas fa-file-alt"></i></td>
                    </tr>
                    <tr style="display:none" class="parentId1">
                      <td class="text-center">[1.01.03]</td>
                      <td style="padding-left: 40px"><a href onclick="base2()">+ Program peningkatan sarana prasarana</a></td>
                      <td>600.000.000.000</td>
                      <td>Bidang Pemeliharaan</td>
                      <td><i class="fas fa-file-alt"></i></td>
                    </tr>
                    <tr style="display:none" class="parentId2">
                      <td class="text-center">[1.01.03.01]</td>
                      <td style="padding-left: 80px">Pemeliharaan rutin/berkala gedung kantor</td>
                      <td>300.000.000.000</td>
                      <td>Seksi Pemeliharaan</td>
                      <td><i class="fas fa-file-alt"></i></td>
                    </tr>
                    <tr style="display:none" class="parentId2">
                      <td class="text-center">[1.01.03.02]</td>
                      <td style="padding-left: 80px">Pengadaan BBM dan pelumas</td>
                      <td>300.000.000.000</td>
                      <td>Seksi Pemeliharaan</td>
                      <td><i class="fas fa-file-alt"></i></td>
                    </tr>
                    <tr class="clickable-row">
                      <td></td>
                      <td>+ Meningkatkan kualitas layanan pendidikan</a></td>
                      <td>900.000.000.000</td>
                      <td>Bidang Pembinaan</td>
                      <td><i class="fas fa-file-alt"></i></td>
                    </tr>
                    <tr class="clickable-row">
                      <td></td>
                      <td>+ Meningkatkan akses pendidikan non formal</a></td>
                      <td>800.000.000.000</td>
                      <td>Bidang Pembinaan</td>
                      <td><i class="fas fa-file-alt"></i></td>
                    </tr>
                    <tr>
                      <td colspan="2">Total Pagu Indikatif</td>
                      <td>3.200.000.000.000</td>
                      <td></td>
                      <td></td>
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
            <span>Copyright &copy; TRASPAC 2019</span>
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


</body>

<?php $this->load->view('partials/script.php')?>

<script type="text/javascript">
  function base1(){
    event.preventDefault();
    $('.parentId1').toggle();
  }

  function base2(){
    event.preventDefault();
    if($('.parentId2').hasClass('parentId1')) $('.parentId2').removeClass('parentId1').toggle();
    else $('.parentId2').addClass('parentId1').toggle();
  }
</script>

</html>
