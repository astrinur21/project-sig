<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIG | Data Tabel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Halaman Utama</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Kontak</a>
      </li>
    </ul>
</nav>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/unnamed.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/female.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">ASTRI NUR KHUSNA</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                PENJELASAN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>BERANDA</p>
                </a>
              </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tabel
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Tables</p>
                </a>
              </li>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Tabel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Tabel Jumlah Bencana Alam Menurut Kabupaten/ Kota di Jawa Tengah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>KOTA/KABUPATEN</th>
                    <th>TANAH LONGSOR</th>
                    <th>BANJIR</th>
                    <th>ANGIN PUTTING BELIUNG</th>
                    <th>KEKERINGAN</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Kabupaten Cilacap</td>
                    <td>30</td>
                    <td>20</td>
                    <td>44</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>Kabupaten Banyumasp</td>
                    <td>11</td>
                    <td>09</td>
                    <td>10</td>
                    <td>10</td>
                  </tr>
                  <tr>
                    <td>Kabupaten Banjarnegara</td>
                    <td>5</td>
                    <td>2</td>
                    <td>0</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>Kabupaten Kebumen</td>
                    <td>4</td>
                    <td>2</td>
                    <td>0</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    </td>Kabupaten Sukoharjo</td>
                    <td>1</td>
                    <td>2</td>
                    <td>0</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>Kabupaten Karanganyar</td>
                    <td>18</td>
                    <td>11</td>
                    <td>9</td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <td>Kabupaten Blora</td>
                    <td>7</td>
                    <td>0</td>
                    <td>0</td>
                    <td>3</td>
                  </tr>
                  <tr>
                  <td>Kabupaten Rembang</td>
                    <td>2</td>
                    <td>2</td>
                    <td>1</td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <td>Kabupaten Kudus</td>
                    <td>3</td>
                    <td>10</td>
                    <td>1</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>Kabupaten Demak</td>
                    <td>4</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>Kabupaten Jepara</td>
                    <td>8</td>
                    <td>1</td>
                    <td>0</td>
                    <td>5</td>
                  </tr>
                  <tr>
                    <td>Kabupaten Tegal</td>
                    <td>3</td>
                    <td>1</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <td>Kota Salatiga</td>
                    <td>4</td>
                    <td>2</td>
                    <td>9</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>Kota Magelang</td>
                    <td>4</td>
                    <td>1</td>
                    <td>3</td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <td>Kabupaten Temanggung</td>
                    <td>4</td>
                    <td>2</td>
                    <td>1</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>Kabupaten Banyumasp</td>
                    <td>1</td>
                    <td>2</td>
                    <td>9</td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <td>Kabupaten Pemalang</td>
                    <td>18</td>
                    <td>1</td>
                    <td>9</td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td>-</td>
                    <td>U</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
