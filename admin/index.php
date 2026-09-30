<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php include 'partials/head.php' ?>
<!-- end -->

<body>
  <div id="overlay" class="overlay"></div>
  <!-- TOPBAR -->
  <?php include 'components/topbar.php' ?>
  <!-- TOPBAR -->


  <!-- SIDEBAR -->
  <?php include 'components/sidebar.php' ?>
  <!-- SIDEBAR -->


  <!-- MAIN CONTENT -->
  <!-- Fungsinya untuk menampilkan halaman hanya dibagian main content saja -->
  <?php
  $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
  switch ($page) {
    // Untuk memberi nama halamannya
    // Dashboard
    case 'dashboard':
      // isinya apa / mau diisi dengan bagian pages apa
      include 'pages/dashboard.php';
      // Fungsinya untuk menahan halaman agar tidak 
      // otomatis berpindah ke halaman setelahnya
      break;

    // Kategori-> untuk halaman kategori
    // case nya nanti berfungsi unruk memanggil halaman di sidebar dan / hrefnya
    case 'kategori':
      include 'pages/kategori/kategori.php';
      break;
    

    // untuk mengarahkan halaman awal yang akan dibuka
    default:
      include 'pages/dashboard.php';
      break;
  }
  ?>
  <!-- MAIN CONTENT -->


  <!-- Bootstrap JS -->
  <?php include 'partials/script.php' ?>
  <!-- Bootstrap JS -->



</body>

</html>