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
            <a href="index.php">Home</a>
            <a href="#about">About Us</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </div>
    </nav>
    
    <section>
        
        <div class="content">
            <div class="sidebar">
                <h3>Filter By Merk</h3>
                <form action="homeartikel.php" method="get">
                <label> <input type="checkbox" class="filter-checkbox" name="merk[]" value="Xiaomi"> Xiaomi </label>
                <label> <input type="checkbox" class="filter-checkbox" name="merk[]" value="Vivo"> Vivo </label>
                <label> <input type="checkbox" class="filter-checkbox" name="merk[]" value="Realme"> Realme </label>
                <label> <input type="checkbox" class="filter-checkbox" name="merk[]" value="Samsung"> Samsung </label>
                <input class="filter" type="submit" name="filter" value="Filter">
            </form>
            </div>
            
            <div class="article-container">
                <h1>Berita Tentang Kami</h1>
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
                <?php endforeach; ?>
            </div>
            <div class="sidebarr right-sidebar">
                <h3>Berita Seputar Handphone</h3>
                <a href="artikel.php?id=<?php echo $result['id']; ?> " class="right-article">
                    <div class="article">
                        <img src="../assets/artikel/<?php echo $result['gambar']; ?>" alt="<?php echo $result['judul']; ?>">
                        <div class="article-content">
                            <h2><?php echo $result['judul']; ?></h2>
                            <p class="date"><?php echo $result['tanggal']; ?></p>
                            <p><?php echo substr($result["isi"], 0, 25) . "..."; ?></p>
                        </div>
                    </div>
                </a>
                <!-- Tambahkan artikel lainnya sesuai kebutuhan -->
            </div>
        </div>
    </section>
    <footer>
        <p>tes</p>
    </footer>
</body>
</html>
