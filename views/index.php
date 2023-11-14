<?php
include '../koneksi/config.php';

if (isset($_GET['search'])) {
    $cari = mysqli_real_escape_string($conn, $_GET['search']);

    $query = "SELECT * FROM artikel WHERE judul LIKE '%$cari%'";
    $tampil = mysqli_query($conn, $query);
} else if (isset($_GET['filter'])) {
    // Pengecekan apakah parameter merk di-set
    if (isset($_GET['merk'])) {
        // Mendapatkan nilai merk yang dipilih
        $selectedMerk = $_GET['merk'];

        // Membuat klausa WHERE berdasarkan nilai merk yang dipilih
        $whereClause = " WHERE merk IN ('" . implode("', '", $selectedMerk) . "')";
        
        // Menyusun query dengan klausa WHERE
        $query = "SELECT * FROM artikel" . $whereClause;
        
        // Menjalankan query
        $tampil = mysqli_query($conn, $query);
    } else {
        $tampil = mysqli_query($conn, "SELECT * FROM artikel");
    }
}
else {
    $tampil = mysqli_query($conn, "SELECT * FROM artikel");
}

$art = mysqli_fetch_all($tampil, MYSQLI_ASSOC);
?>

<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Toko Handphone </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">
    <!-- ICON -->
    <script src="https://unpkg.com/feather-icons"></script>
    
    <!-- LINK style css nya -->
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- <link rel="stylesheet" href="../css/aboutus.css"> -->
  
 
</head>
  
  <body>
    <!-- navbar start  --> <!-- Guna span untuk misahkan untuk ubah warna jdi primary -->
    <nav class="navbar">    
        <a href="#" class="navbar-logo">Toko<span>Handphone</span></a>

    <div class="navbar-nav">
        <a href="#">Home</a>
        <a href="#about">About Us</a>
        <a href="produk.php">Katalog</a>
        <a href="homeartikel.php">Artikel</a>
        <a href="#contact">Kontak</a>
    </div>
    <div class="navbar-login">
      <a href="login.php" id="login">Login</a>
      <a href="register.php" id="register">Register</a>
    </div>

    <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="../views/keranjang.html" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </nav>

    <!-- navbar end -->

    <!-- hero section start-->
    <section class="hero" id="#home">
      <main class="content">
        <h1>Toko <span>Handphone</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, nulla nemo dolor ipsa et quasi ut, illo assumenda tempore, paduka kakang abdi hastala vista</p>
        <a href="produk.php" class="cta">Beli Sekarang</a>
      </main>
    </section>
    <!-- hero section end -->

     <!-- about section start -->
    <section id="about" class="about">
      <h2><span>About</span> Us</h2>

      <div class="row">
        <div class="about-img">
          <img src="../img/aboutshop.img.jpg" 
          alt="About Us">
        </div>
        <div class="content">
          <h3>About Shop</h3>
          <p>Selamat datang di "Gadget Express", destinasi utama Anda untuk memenuhi kebutuhan teknologi terkini! Kami bangga menyajikan rangkaian lengkap perangkat mobile terbaik dari merek terkemuka di industri. Dengan kombinasi inovasi terbaru dan layanan pelanggan yang unggul.</p>
        </div>
      </div>
      <div class="container">
        <div class="person">
        <img src="../img/BG.home.jpeg.jpg" alt="Person 1">
        <h3>Muhammad Abdillah</h3>
        <h4>back end</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget feugiat libero.</p>
    </div>

    <div class="person">
        <img src="../img/BG.home.jpeg.jpg" alt="Person 2">
        <h3>Tommy Candra Gunawan</h3>
        <h4>front end</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget feugiat libero.</p>
    </div>
    
    <div class="person">
        <img src="../img/BG.home.jpeg.jpg" alt="Person 3">
        <h3>Rifky Nurhidayat</h3>
        <h4>Hosting</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget feugiat libero.</p>
    </div>
</div>
</section>
     <!-- about section end -->
     <footer>
       <p>&copy; 2023 About Us. All rights reserved.</p>
     </footer>

    <!-- feather icon -->
    <script>
        feather.replace();
    </script>
    <!-- javascript -->
    <script src="../js/script.js"></script>
  </body>

</html>
