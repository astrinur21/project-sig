<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="./resources/ol.css">
        <link rel="stylesheet" href="resources/fontawesome-all.min.css">
        <link rel="stylesheet" href="./resources/ol-layerswitcher.css">
        <link rel="stylesheet" href="./resources/qgis2web.css">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style>
.search-layer {
  top: 65px;
  left: .5em;
}
.ol-touch .search-layer {
  top: 80px;
}
</style>
        <style>
        html, body {
            background-color: #ffffff;
        }
        .ol-control button {
            background-color: #f8f8f8 !important;
            color: #000000 !important;
            border-radius: 0px !important;
        }
        .ol-zoom, .geolocate, .gcd-gl-control .ol-control {
            background-color: rgba(255,255,255,.4) !important;
            padding: 3px !important;
        }
        .ol-scale-line {
            background: none !important;
        }
        .ol-scale-line-inner {
            border: 2px solid #f8f8f8 !important;
            border-top: none !important;
            background: rgba(255, 255, 255, 0.5) !important;
            color: black !important;
        }
        </style>
        <style>
        #map {
            width: 1066px;
            height: 551px;
        }
        </style>
</head>
        <title>SIG | PENJELASAN</title>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">PENJELASAN</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Kontak</a>
      </li>
    </ul>
    </nav>

<center>
    <section class="content">
      <div class="container-fluid">
      <div id="map">
          <div id="popup" class="ol-popup">
              <a href="#" id="popup-closer" class="ol-popup-closer"></a>
              <div id="popup-content"></div>
          </div>
          </div>
      </div>
      <script src="resources/qgis2web_expressions.js"></script>
      <script src="resources/polyfills.js"></script>
      <script src="./resources/functions.js"></script>
      <script src="./resources/ol.js"></script>
      <script src="./resources/ol-layerswitcher.js"></script>
      <script src="layers/Indo_Kab_Kot_0.js"></script><script src="layers/petajawatengah_1.js"></script>
      <script src="styles/Indo_Kab_Kot_0_style.js"></script><script src="styles/petajawatengah_1_style.js"></script>
      <script src="./layers/layers.js" type="text/javascript"></script> 
      <script src="./resources/Autolinker.min.js"></script>
      <script src="./resources/qgis2web.js"></script>
    </center>
    </div>
    <center>
    <section class="content">
    <div><br>
      <h2>SISTEM INFORMASI GEOGRAFI PEMETAAN KEJADIAN BENCANA ALAM</h2>
      <h2>MENURUT KABUPATEN/KOTA DI PROVINSI JAWA TENGAH</h2>
      <br>
          <h3>Indonesia merupakan salah satu negara yang memiliki jumlah gunung berapi aktif terbanyak di dunia. 
              Selain itu iklim dnegan curah hujan yang tinggi dan kemarau yang Panjang berpotensi menimbulkan banjir, kekeringan dan tanah longsor. Di awal tahun 2020 sudah disambut oleh berbagai macam bencana alam mulai dari banjir, tanah longsor, hingga angin putting beliung. Ditambah dengan adanya wabah virus covid-19 yang melanda seluruh dunia. 
              Kerugian yang ditimbulkan pun tidak sedikit juga dampak yang mempengaruhi sektor perusahaan restoran, penerbangan dan pariwisata mengalami penuruan omset.
              Dengan adanya bencana alam yang terus-menerus menimpa indonesia membuat kesadaran kita semakin meningkat tentang perlunya sistem informasi geografi tentang bencana alam. Adanya sistem ini membantu kita untuk menyadari wilayah mana saja di Jawa Tengah yang merupakan rawan bencana. 
              Oleh karena itu diperlukan langkah-langkah penanggulangan bencana sebelum, pada saat, dan sesudah bencana. 
              Sehingga meminimalisir terjadinya bencana juga mengurangi kerugian yang ditanggung ketika terjadi bencana.
          </h3><br>
  </div>
</center>
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
    <a href="index.html" class="brand-link">
      <img src="dist/img/unnamed.png" alt="SISTEM INFORMASI GEOGRAFIS" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/female.png" class="img-circle elevation-2" alt="User Image">
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
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               PENJELASAN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>BERANDA</p>
                </a>
              </li>
      
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Tabel
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
    
                  </li>
                  <li class="nav-item">
                    <a href="pages/tables/data.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Tabel</p>
                    </a>
                  </li>
    
                </ul>
              </li>

             
            </ul>
          </nav>
      <!-- /.sidebar-menu -->
    </body>
</html>
