<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
require "db.php";

$tbl_foto = mysqli_query($conn, "SELECT * FROM foto_tb");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Admin Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/b9fbc0251e.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="http://jemjemciiiitstudio.great-site.net" target="_blank">
        <img src="assets/img/New folder/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Admin Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link text-white btn bg-gradient-primary" href="foto.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-image"></i>
            </div>
            <span class="nav-link-text ms-1">Photos</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="video.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-film"></i>
            </div>
            <span class="nav-link-text ms-1">Video</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="music.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-music"></i>
            </div>
            <span class="nav-link-text ms-1">Music</span>
          </a>
        </li>

      </ul>
    </div>
  </aside>

  <div class="main-content position-relative max-height-vh-100 h-100">

    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>

      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row">
          <div class="col-12 mt-4">
            <div class="mb-5 ps-3">
              <h6 class="mb-1">Portfolio</h6>
              <p class="text-sm">Foto</p>
            </div>
            <div class="d-flex flex-wrap">
              <?php while ($foto_tb = mysqli_fetch_assoc($tbl_foto)) { ?>
                <div class="row" >
                  <div class="col-sm m-4">
                    <div class="card card-blog card-plain">
                      <div class="card-header p-0 mt-n4 mx-3">
                        <a class="d-block shadow-xl border-radius-xl" style="width:260px;height:240px;">
                          <img src="assets/img/<?php echo $foto_tb['foto'] ?>" alt="not found" class="img-fluid shadow border-radius-xl">
                        </a>
                      </div>
                      <div class="card-body m-3">
                        <a href="javascript:;">
                          <h5>
                            <?php echo $foto_tb["nama_foto"] ?>
                          </h5>
                        </a>
                        <p class="mb-4 text-sm">
                          <?php echo $foto_tb["deskripsi_foto"] ?>
                        </p>
                        <div class="d-flex align-items-center justify-content-between">
                          <a href="edit-foto.php?id=<?php echo $foto_tb['id_foto'] ?>" type="button" class="btn btn-outline-primary pr-3 pl-3 m-3">Edit</a>
                          <a class="btn btn-primary" href="hapus-foto.php?id=<?php echo $foto_tb['id_foto'] ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Hapus
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
              <div class="row">
                <div class="card card-blog card-plain col-sm">
                  <div class="card-body p-3 d-flex align-items-stretch">
                    <div class="d-flex align-items-stretch justify-content-between">
                      <!-- Button trigger modal -->
                      <button style="width:130px;height:50px;" type="button" class="btn btn-outline-info btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#TambahFoto">
                        Tambah
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>







  <div class="modal fade" id="TambahFoto" tabindex="-1" role="dialog" aria-labelledby="TambahFotoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="TambahFotoLabel">Tambah Foto</h5>
        </div>
        <form class="user" method="POST" action="db.php" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Nama</label>
              <input name="nama" type="text" class="form-control" required>
            </div>
            <div class=" input-group input-group-outline my-3">
              <label class="form-label">Deskripsi</label>
              <input name="deskripsi" type="text" class="form-control" required>
            </div>
            <div class=" input-group input-group-outline my-3 is-filled">
              <label class="form-label">Profile Photo</label>
              <input name="fileToUpload" type="file" class="form-control" id="fileToUpload" required>
            </div>
          </div>
          <div class=" modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn bg-gradient-primary" name="insertFoto">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>

  <div class="fixed-plugin" id="iconNavbarSidenav">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
  </div>

  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html><!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
require "db.php";

$tbl_foto = mysqli_query($conn, "SELECT * FROM foto_tb");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Admin Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/b9fbc0251e.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="http://jemjemciiiitstudio.great-site.net" target="_blank">
        <img src="assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Admin Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link text-white btn bg-gradient-primary" href="foto.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-image"></i>
            </div>
            <span class="nav-link-text ms-1">Photos</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="video.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-film"></i>
            </div>
            <span class="nav-link-text ms-1">Video</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="music.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-music"></i>
            </div>
            <span class="nav-link-text ms-1">Music</span>
          </a>
        </li>

      </ul>
    </div>
  </aside>

  <div class="main-content position-relative max-height-vh-100 h-100">

    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>

      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row">
          <div class="col-12 mt-4">
            <div class="mb-5 ps-3">
              <h6 class="mb-1">Portfolio</h6>
              <p class="text-sm">My Works</p>
            </div>
            <div class="d-flex flex-wrap">
              <?php while ($foto_tb = mysqli_fetch_assoc($tbl_foto)) { ?>
                <div class="row" >
                  <div class="col-sm m-4">
                    <div class="card card-blog card-plain">
                      <div class="card-header p-0 mt-n4 mx-3">
                        <a class="d-block shadow-xl border-radius-xl" style="width:260px;height:240px;">
                          <img src="assets/img/<?php echo $foto_tb['foto'] ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                        </a>
                      </div>
                      <div class="card-body m-3">
                        <p class="mb-0 text-sm">Project #2</p>
                        <a href="javascript:;">
                          <h5>
                            <?php echo $foto_tb["nama_foto"] ?>
                          </h5>
                        </a>
                        <p class="mb-4 text-sm">
                          <?php echo $foto_tb["deskripsi_foto"] ?>
                        </p>
                        <div class="d-flex align-items-center justify-content-between">
                          <a href="edit-foto.php?id=<?php echo $foto_tb['id_foto'] ?>" type="button" class="btn btn-outline-primary pr-3 pl-3 m-3">Edit</a>
                          <a class="btn btn-primary" href="hapus-foto.php?id=<?php echo $foto_tb['id_foto'] ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Hapus
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
              <div class="row">
                <div class="card card-blog card-plain col-sm">
                  <div class="card-body p-3 d-flex align-items-stretch">
                    <div class="d-flex align-items-stretch justify-content-between">
                      <!-- Button trigger modal -->
                      <button style="width:130px;height:50px;" type="button" class="btn btn-outline-info btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#TambahFoto">
                        Tambah
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>







  <div class="modal fade" id="TambahFoto" tabindex="-1" role="dialog" aria-labelledby="TambahFotoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="TambahFotoLabel">Tambah Foto</h5>
        </div>
        <form class="user" method="POST" action="db.php" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Nama</label>
              <input name="nama" type="text" class="form-control" required>
            </div>
            <div class=" input-group input-group-outline my-3">
              <label class="form-label">Deskripsi</label>
              <input name="deskripsi" type="text" class="form-control" required>
            </div>
            <div class=" input-group input-group-outline my-3 is-filled">
              <label class="form-label">Profile Photo</label>
              <input name="fileToUpload" type="file" class="form-control" id="fileToUpload" required>
            </div>
          </div>
          <div class=" modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn bg-gradient-primary" name="insertFoto">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>

  <div class="fixed-plugin" id="iconNavbarSidenav">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
  </div>

  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html><!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
require "db.php";

$tbl_foto = mysqli_query($conn, "SELECT * FROM foto_tb");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Admin Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/b9fbc0251e.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="http://jemjemciiiitstudio.great-site.net" target="_blank">
        <img src="assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Admin Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link text-white btn bg-gradient-primary" href="foto.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-image"></i>
            </div>
            <span class="nav-link-text ms-1">Photos</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="video.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-film"></i>
            </div>
            <span class="nav-link-text ms-1">Video</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="music.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-music"></i>
            </div>
            <span class="nav-link-text ms-1">Music</span>
          </a>
        </li>

      </ul>
    </div>
  </aside>

  <div class="main-content position-relative max-height-vh-100 h-100">

    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>

      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row">
          <div class="col-12 mt-4">
            <div class="mb-5 ps-3">
              <h6 class="mb-1">Portfolio</h6>
              <p class="text-sm">My Works</p>
            </div>
            <div class="d-flex flex-wrap">
              <?php while ($foto_tb = mysqli_fetch_assoc($tbl_foto)) { ?>
                <div class="row" >
                  <div class="col-sm m-4">
                    <div class="card card-blog card-plain">
                      <div class="card-header p-0 mt-n4 mx-3">
                        <a class="d-block shadow-xl border-radius-xl" style="width:260px;height:240px;">
                          <img src="assets/img/<?php echo $foto_tb['foto'] ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                        </a>
                      </div>
                      <div class="card-body m-3">
                        <p class="mb-0 text-sm">Project #2</p>
                        <a href="javascript:;">
                          <h5>
                            <?php echo $foto_tb["nama_foto"] ?>
                          </h5>
                        </a>
                        <p class="mb-4 text-sm">
                          <?php echo $foto_tb["deskripsi_foto"] ?>
                        </p>
                        <div class="d-flex align-items-center justify-content-between">
                          <a href="edit-foto.php?id=<?php echo $foto_tb['id_foto'] ?>" type="button" class="btn btn-outline-primary pr-3 pl-3 m-3">Edit</a>
                          <a class="btn btn-primary" href="hapus-foto.php?id=<?php echo $foto_tb['id_foto'] ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Hapus
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
              <div class="row">
                <div class="card card-blog card-plain col-sm">
                  <div class="card-body p-3 d-flex align-items-stretch">
                    <div class="d-flex align-items-stretch justify-content-between">
                      <!-- Button trigger modal -->
                      <button style="width:130px;height:50px;" type="button" class="btn btn-outline-info btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#TambahFoto">
                        Tambah
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>







  <div class="modal fade" id="TambahFoto" tabindex="-1" role="dialog" aria-labelledby="TambahFotoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="TambahFotoLabel">Tambah Foto</h5>
        </div>
        <form class="user" method="POST" action="db.php" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Nama</label>
              <input name="nama" type="text" class="form-control" required>
            </div>
            <div class=" input-group input-group-outline my-3">
              <label class="form-label">Deskripsi</label>
              <input name="deskripsi" type="text" class="form-control" required>
            </div>
            <div class=" input-group input-group-outline my-3 is-filled">
              <label class="form-label">Profile Photo</label>
              <input name="fileToUpload" type="file" class="form-control" id="fileToUpload" required>
            </div>
          </div>
          <div class=" modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn bg-gradient-primary" name="insertFoto">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>

  <div class="fixed-plugin" id="iconNavbarSidenav">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
  </div>

  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html><!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
require "db.php";

$tbl_foto = mysqli_query($conn, "SELECT * FROM foto_tb");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Admin Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/b9fbc0251e.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="http://jemjemciiiitstudio.great-site.net" target="_blank">
        <img src="assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Admin Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link text-white btn bg-gradient-primary" href="foto.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-image"></i>
            </div>
            <span class="nav-link-text ms-1">Photos</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="video.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-film"></i>
            </div>
            <span class="nav-link-text ms-1">Video</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="music.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-music"></i>
            </div>
            <span class="nav-link-text ms-1">Music</span>
          </a>
        </li>

      </ul>
    </div>
  </aside>

  <div class="main-content position-relative max-height-vh-100 h-100">

    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>

      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row">
          <div class="col-12 mt-4">
            <div class="mb-5 ps-3">
              <h6 class="mb-1">Portfolio</h6>
              <p class="text-sm">My Works</p>
            </div>
            <div class="d-flex flex-wrap">
              <?php while ($foto_tb = mysqli_fetch_assoc($tbl_foto)) { ?>
                <div class="row" >
                  <div class="col-sm m-4">
                    <div class="card card-blog card-plain">
                      <div class="card-header p-0 mt-n4 mx-3">
                        <a class="d-block shadow-xl border-radius-xl" style="width:260px;height:240px;">
                          <img src="assets/img/<?php echo $foto_tb['foto'] ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                        </a>
                      </div>
                      <div class="card-body m-3">
                        <p class="mb-0 text-sm">Project #2</p>
                        <a href="javascript:;">
                          <h5>
                            <?php echo $foto_tb["nama_foto"] ?>
                          </h5>
                        </a>
                        <p class="mb-4 text-sm">
                          <?php echo $foto_tb["deskripsi_foto"] ?>
                        </p>
                        <div class="d-flex align-items-center justify-content-between">
                          <a href="edit-foto.php?id=<?php echo $foto_tb['id_foto'] ?>" type="button" class="btn btn-outline-primary pr-3 pl-3 m-3">Edit</a>
                          <a class="btn btn-primary" href="hapus-foto.php?id=<?php echo $foto_tb['id_foto'] ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Hapus
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
              <div class="row">
                <div class="card card-blog card-plain col-sm">
                  <div class="card-body p-3 d-flex align-items-stretch">
                    <div class="d-flex align-items-stretch justify-content-between">
                      <!-- Button trigger modal -->
                      <button style="width:130px;height:50px;" type="button" class="btn btn-outline-info btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#TambahFoto">
                        Tambah
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>







  <div class="modal fade" id="TambahFoto" tabindex="-1" role="dialog" aria-labelledby="TambahFotoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="TambahFotoLabel">Tambah Foto</h5>
        </div>
        <form class="user" method="POST" action="db.php" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Nama</label>
              <input name="nama" type="text" class="form-control" required>
            </div>
            <div class=" input-group input-group-outline my-3">
              <label class="form-label">Deskripsi</label>
              <input name="deskripsi" type="text" class="form-control" required>
            </div>
            <div class=" input-group input-group-outline my-3 is-filled">
              <label class="form-label">Profile Photo</label>
              <input name="fileToUpload" type="file" class="form-control" id="fileToUpload" required>
            </div>
          </div>
          <div class=" modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn bg-gradient-primary" name="insertFoto">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>

  <div class="fixed-plugin" id="iconNavbarSidenav">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
  </div>

  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>