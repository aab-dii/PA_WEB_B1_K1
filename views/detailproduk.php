<?php
include '../koneksi/config.php'; 

session_start(); 

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['id'])) {
    $_SESSION['id_barang'] = $_GET['id'];
} else {
    echo "ID barang tidak ditemukan.";
    exit; 
}

$id_barang = $_SESSION['id_barang'];
$_SESSION['id_pengguna'] = $_SESSION['id'];

if (isset($_POST['jumlah'])){
    $_POST['quantity'] = $_SESSION['qty'];
    header("Location: transaksi.php");
}

$sql = "SELECT * FROM hp_form WHERE id = $id_barang";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $barang = mysqli_fetch_assoc($result);
} else {
    // Tindakan jika barang dengan ID tertentu tidak ditemukan
    echo "Barang dengan ID $id_barang tidak ditemukan.";
    exit; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/detailproduk.css">
    <title>Detail Barang</title>
</head>
<body>
    <nav class="navbar">    
        <a href="#" class="navbar-logo">Toko<span>Handphone</span></a>

    <div class="navbar-nav">
    <a href="index.html">Home </a>
            <a href="produk.php">Katalog Produk </a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
    </div>
    
    <div class="navbar-extra">
      <a href="#" id="search"><i data-feather="search"></i></a>
      <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>
    </nav>

    <section>
        <div class="container">
            <div class="detail">
                <div class="wrap-detail">
                    <div class="img">
                        <img src="../assets/<?php echo $barang['gambar']; ?>" alt="Product Image">
                    </div>
                    <div class="wrapp">
                        <div class="detail-info">
                            <h2><?php echo $barang['nama']; ?></h2>
                            <p>Stok : <?php echo $barang['stok']; ?></p>
                            <h2>Harga: Rp <?php echo number_format($barang['harga']); ?></h2>
                        </div>
                        <div class="deskripsi">
                            <h2>Deskripsi Produk</h2>
                            <p id="deskripsi-content">
                                <?php echo $barang['deskripsi']; ?>
                            </p>
                            <button onclick="toggleDeskripsi()">Lihat Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <div class="comments">
                    <h2>Komentar</h2>
                    <div class="user-comment">
                        <img src="../img/BG.home.jpeg.jpg" alt="User Profile">
                        <div class="comment-details">
                            <h4>Nama User</h4>
                            <p>Komentar pengguna akan ditampilkan di sini.</p>
                        </div>
                    </div>
                    <div class="user-comment">
                        <img src="../img/BG.home.jpeg.jpg" alt="User Profile">
                        <div class="comment-details">
                            <h4>Nama User</h4>
                            <p>Komentar pengguna akan ditampilkan di sini.</p>
                        </div>
                    </div>
                    <div class="user-comment">
                        <img src="../img/BG.home.jpeg.jpg" alt="User Profile">
                        <div class="comment-details">
                            <h4>Nama User</h4>
                            <p>Komentar pengguna akan ditampilkan di sini.</p>
                        </div>
                    </div>
                    <div class="user-comment">
                        <img src="../img/BG.home.jpeg.jpg" alt="User Profile">
                        <div class="comment-details">
                            <h4>Nama User</h4>
                            <p>Komentar pengguna akan ditampilkan di sini.</p>
                        </div>
                    </div>
                    <div class="comment-list">
                        
                    </div>
                    <form class="comment-form">
                        <label for="nama">Nama:</label>
                        <input type="text" id="nama" name="nama" required>
            
                        <label for="komentar">Komentar:</label>
                        <textarea id="komentar" name="komentar" required></textarea>
            
                        <button type="submit">Tambah Komentar</button>
                    </form>
                </div>
            </div>
            <div class="form-keranjang">
                <form action="" method="post">
                    <label for="quantity">Jumlah:</label>
                    <input type="number" id="quantity" name="quantity" min="1" required>
                    <button type="submit" name="jumlah">Tambah ke Keranjang</button>
                </form>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="social-media">
            <a href="#" target="_blank" class="social-icon"><img src="instagram-icon.png" alt="Instagram"></a>
            <a href="#" target="_blank" class="social-icon"><img src="facebook-icon.png" alt="Facebook"></a>
        </div>
        <p>&copy; 2023 Toko Handphone. All Rights Reserved.</p>
    </footer>
    <script>
        function toggleDeskripsi() {
        var deskripsiElem = document.getElementById('deskripsi-content');
        var buttonElem = document.querySelector('.deskripsi button');

        deskripsiElem.classList.toggle('collapsed');

        if (deskripsiElem.classList.contains('collapsed')) {
            buttonElem.textContent = 'Lihat Lebih Sedikit';
        } else {
            buttonElem.textContent = 'Lihat Selengkapnya';
        }
    }
    </script>

</body>
</html>
