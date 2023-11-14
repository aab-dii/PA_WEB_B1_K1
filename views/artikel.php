<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "ID barang tidak ditemukan.";
    exit; 
}

include '../koneksi/config.php'; 

$sql = "SELECT * FROM artikel WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $artikel = mysqli_fetch_assoc($result);
} else {
    // Tindakan jika barang dengan ID tertentu tidak ditemukan
    echo "Barang dengan ID $id tidak ditemukan.";
    exit; 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/artikel.css">
    <title>Judul Artikel</title>
</head>
<body>

    <nav class="navbar">    
        <a href="#" class="navbar-logo">Toko<span>Handphone</span></a>

        <div class="navbar-nav">
            <a href="index.html">Home</a>
            <a href="produk.php">Katalog Produk</a>
            <a href="#contact">Kontak</a>
            <a href="login.php">Login/Register</a>
        </div>
    </nav>

    <section>
        <header>
            <p class="date"><?php echo $artikel['tanggal'];?></p>
            <h1><?php echo $artikel['judul'];?></h1>
        </header>
        <article>
        <img src="../assets/artikel/<?php echo $artikel['gambar']; ?>" alt="Gambar Artikel">
            <p><?php echo $artikel['isi']; ?></p>
        </article>
    </section>

    <section class="rekomendasi">
        <h2>Artikel Rekomendasi</h2>
        <div class="rekomendasi-container">
                <div class="rekomendasi-article">
                    <a href="">
                    <img src="../img/BG.home.jpeg.jpg" alt="">
                    <h3>Judul Artikel Rekomendasi 1</h3>
                    </a>
                </div>
                <div class="rekomendasi-article">
                    <a href="">
                    <img src="../img/BG.home.jpeg.jpg" alt="">
                    <h3>Judul Artikel Rekomendasi 1</h3>
                    </a>
                </div>
                <div class="rekomendasi-article">
                    <a href="">
                    <img src="../img/BG.home.jpeg.jpg" alt="">
                    <h3>Judul Artikel Rekomendasi 1</h3>
                    </a>
                </div>
                <div class="rekomendasi-article">
                    <a href="">
                    <img src="../img/BG.home.jpeg.jpg" alt="">
                    <h3>Judul Artikel Rekomendasi 1</h3>
                    </a>
                </div>
                <div class="rekomendasi-article">
                    <a href="">
                    <img src="../img/BG.home.jpeg.jpg" alt="">
                    <h3>Judul Artikel Rekomendasi 1</h3>
                    </a>
                </div>
                
            <!-- Tambahkan artikel rekomendasi lainnya sesuai kebutuhan -->
        </div>
    </section>

    <footer>
        <!-- Tambahkan footer jika diperlukan -->
    </footer>
</body>
</html>
