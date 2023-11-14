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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/homeartikel.css">
    <title>Halaman Utama Artikel</title>
</head>
<body>
    <nav class="navbar">    
        <a href="#" class="navbar-logo">Toko<span>Handphone</span></a>

        <div class="navbar-nav">
            <a href="index.html">Home</a>
            <a href="#about">About Us</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </div>
    </nav>
    
    <section>
        <h1>Berita Tentang Kami</h1>

        <div class="content">
            <div class="sidebar">
                <h3>Kategori</h3>
                <ul>
                    <li><a href="#">Kategori 1</a></li>
                    <li><a href="#">Kategori 2</a></li>
                    <li><a href="#">Kategori 3</a></li>
                    <!-- Tambahkan kategori lainnya sesuai kebutuhan -->
                </ul>
            </div>

            <div class="article-container">
            <?php foreach ($art as $result) : ?>
                <div class="article">
                    <a href="artikel.php?id=<?php echo $result['id']; ?> "class="artikela">
                        <img src="../assets/artikel/<?php echo $result['gambar']; ?>" alt="<?php echo $result['judul']; ?>">
                        <div class="article-content">
                            <h2><?php echo $result['judul']; ?></h2>
                            <p class="date"><?php echo $result['tanggal']; ?></p>
                            <p class="isi"><?php echo substr($result["isi"], 0, 25) . "..."; ?></p>
                        </div>
                    </a>
                </div>
                <div class="article">
                    <a href="artikel.php?id=<?php echo $result['id']; ?> "class="artikela">
                        <img src="../assets/artikel/<?php echo $result['gambar']; ?>" alt="<?php echo $result['judul']; ?>">
                        <div class="article-content">
                            <h2><?php echo $result['judul']; ?></h2>
                            <p class="date"><?php echo $result['tanggal']; ?></p>
                            <p class="isi"><?php echo substr($result["isi"], 0, 25) . "..."; ?></p>
                        </div>
                    </a>
                </div>
                <div class="article">
                    <a href="artikel.php?id=<?php echo $result['id']; ?> "class="artikela">
                        <img src="../assets/artikel/<?php echo $result['gambar']; ?>" alt="<?php echo $result['judul']; ?>">
                        <div class="article-content">
                            <h2><?php echo $result['judul']; ?></h2>
                            <p class="date"><?php echo $result['tanggal']; ?></p>
                            <p class="isi"><?php echo substr($result["isi"], 0, 25) . "..."; ?></p>
                        </div>
                    </a>
                </div>
                <div class="article">
                    <a href="artikel.php?id=<?php echo $result['id']; ?> "class="artikela">
                        <img src="../assets/artikel/<?php echo $result['gambar']; ?>" alt="<?php echo $result['judul']; ?>">
                        <div class="article-content">
                            <h2><?php echo $result['judul']; ?></h2>
                            <p class="date"><?php echo $result['tanggal']; ?></p>
                            <p class="isi"><?php echo substr($result["isi"], 0, 25) . "..."; ?></p>
                        </div>
                    </a>
                </div>
                <div class="article">
                    <a href="artikel.php?id=<?php echo $result['id']; ?> "class="artikela">
                        <img src="../assets/artikel/<?php echo $result['gambar']; ?>" alt="<?php echo $result['judul']; ?>">
                        <div class="article-content">
                            <h2><?php echo $result['judul']; ?></h2>
                            <p class="date"><?php echo $result['tanggal']; ?></p>
                            <p class="isi"><?php echo substr($result["isi"], 0, 25) . "..."; ?></p>
                        </div>
                    </a>
                </div>
                <div class="article">
                    <a href="artikel.php?id=<?php echo $result['id']; ?> "class="artikela">
                        <img src="../assets/artikel/<?php echo $result['gambar']; ?>" alt="<?php echo $result['judul']; ?>">
                        <div class="article-content">
                            <h2><?php echo $result['judul']; ?></h2>
                            <p class="date"><?php echo $result['tanggal']; ?></p>
                            <p class="isi"><?php echo substr($result["isi"], 0, 25) . "..."; ?></p>
                        </div>
                    </a>
                </div>
                <div class="article">
                    <a href="artikel.php?id=<?php echo $result['id']; ?> "class="artikela">
                        <img src="../assets/artikel/<?php echo $result['gambar']; ?>" alt="<?php echo $result['judul']; ?>">
                        <div class="article-content">
                            <h2><?php echo $result['judul']; ?></h2>
                            <p class="date"><?php echo $result['tanggal']; ?></p>
                            <p class="isi"><?php echo substr($result["isi"], 0, 25) . "..."; ?></p>
                        </div>
                    </a>
                </div>
                <div class="article">
                    <a href="artikel.php?id=<?php echo $result['id']; ?> "class="artikela">
                        <img src="../assets/artikel/<?php echo $result['gambar']; ?>" alt="<?php echo $result['judul']; ?>">
                        <div class="article-content">
                            <h2><?php echo $result['judul']; ?></h2>
                            <p class="date"><?php echo $result['tanggal']; ?></p>
                            <p class="isi"><?php echo substr($result["isi"], 0, 25) . "..."; ?></p>
                        </div>
                    </a>
                </div>
                <div class="article">
                    <a href="artikel.php?id=<?php echo $result['id']; ?> "class="artikela">
                        <img src="../assets/artikel/<?php echo $result['gambar']; ?>" alt="<?php echo $result['judul']; ?>">
                        <div class="article-content">
                            <h2><?php echo $result['judul']; ?></h2>
                            <p class="date"><?php echo $result['tanggal']; ?></p>
                            <p class="isi"><?php echo substr($result["isi"], 0, 25) . "..."; ?></p>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
                <!-- <a href="">
                    <div class="article">
                        <img src="../../assets/artikel/" alt="Gambar Artikel 2">
                        <div class="article-content">
                            <h2>Judul Artikel 2</h2>
                            <p class="date">Tanggal Artikel 2</p>
                            <p>Isi singkat artikel 2...</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="article">
                        <img src="../img/BG.home.jpeg.jpg" alt="Gambar Artikel 2">
                        <div class="article-content">
                            <h2>Judul Artikel 2</h2>
                            <p class="date">Tanggal Artikel 2</p>
                            <p>Isi singkat artikel 2...</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="article">
                        <img src="../img/BG.home.jpeg.jpg" alt="Gambar Artikel 2">
                        <div class="article-content">
                            <h2>Judul Artikel 2</h2>
                            <p class="date">Tanggal Artikel 2</p>
                            <p>Isi singkat artikel 2...</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="article">
                        <img src="../img/BG.home.jpeg.jpg" alt="Gambar Artikel 2">
                        <div class="article-content">
                            <h2>Judul Artikel 2</h2>
                            <p class="date">Tanggal Artikel 2</p>
                            <p>Isi singkat artikel 2...</p>
                        </div>
                    </div>
                </a> -->
                <!-- Tambahkan artikel lainnya sesuai kebutuhan -->
            </div>
            <div class="sidebarr right-sidebar">
                <h3>Berita Seputar Handphone</h3>
                <a href="">
                    <div class="article">
                        <img src="../img/BG.home.jpeg.jpg" alt="Gambar Artikel 3">
                        <div class="article-content">
                            <h2>Judul Artikel 3</h2>
                            <p class="date">Tanggal Artikel 3</p>
                            <p>Isi singkat artikel 3...</p>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="article">
                        <img src="../img/BG.home.jpeg.jpg" alt="Gambar Artikel 4">
                        <div class="article-content">
                            <h2>Judul Artikel 4</h2>
                            <p class="date">Tanggal Artikel 4</p>
                            <p>Isi singkat artikel 4...</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="article">
                        <img src="../img/BG.home.jpeg.jpg" alt="Gambar Artikel 4">
                        <div class="article-content">
                            <h2>Judul Artikel 4</h2>
                            <p class="date">Tanggal Artikel 4</p>
                            <p>Isi singkat artikel 4...</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="article">
                        <img src="../img/BG.home.jpeg.jpg" alt="Gambar Artikel 4">
                        <div class="article-content">
                            <h2>Judul Artikel 4</h2>
                            <p class="date">Tanggal Artikel 4</p>
                            <p>Isi singkat artikel 4...</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="article">
                        <img src="../img/BG.home.jpeg.jpg" alt="Gambar Artikel 4">
                        <div class="article-content">
                            <h2>Judul Artikel 4</h2>
                            <p class="date">Tanggal Artikel 4</p>
                            <p>Isi singkat artikel 4...</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="article">
                        <img src="../img/BG.home.jpeg.jpg" alt="Gambar Artikel 4">
                        <div class="article-content">
                            <h2>Judul Artikel 4</h2>
                            <p class="date">Tanggal Artikel 4</p>
                            <p>Isi singkat artikel 4...</p>
                        </div>
                    </div>
                </a>
                <!-- Tambahkan artikel lainnya sesuai kebutuhan -->
            </div>
        </div>
    </section>
</body>
</html>
