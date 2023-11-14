<?php
include '../koneksi/config.php';

if (isset($_GET['search'])) {
    $cari = mysqli_real_escape_string($conn, $_GET['search']);

    $query = "SELECT * FROM hp_form WHERE nama LIKE '%$cari%'";
    $tampil = mysqli_query($conn, $query);
} else if (isset($_GET['filter'])) {
    // Pengecekan apakah parameter merk di-set
    if (isset($_GET['merk'])) {
        // Mendapatkan nilai merk yang dipilih
        $selectedMerk = $_GET['merk'];

        // Membuat klausa WHERE berdasarkan nilai merk yang dipilih
        $whereClause = " WHERE merk IN ('" . implode("', '", $selectedMerk) . "')";
        
        // Menyusun query dengan klausa WHERE
        $query = "SELECT * FROM hp_form" . $whereClause;
        
        // Menjalankan query
        $tampil = mysqli_query($conn, $query);
    } else {
        $tampil = mysqli_query($conn, "SELECT * FROM hp_form");
    }
}
else {
    $tampil = mysqli_query($conn, "SELECT * FROM hp_form");
}

$hp = mysqli_fetch_all($tampil, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/produk.css">
    <title>Product Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet">
    <!-- ICON -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <nav class="navbar">
        <a href="#" class="navbar-logo">Toko<span>Handphone</span></a>

        <div class="navbar-nav">
            <a href="index.html">Home</a>
            <a href="produk.php">Katalog Produk</a>
            <a href="login.php">Login/Register</a>
            <a href="homeartikel.php">Artikel</a>
        </div>
        <div class="navbar-extra">
            <form action="produk.php" method="get" class="search-form">
                <input type="text" name="search" placeholder="Cari...">
                <button type="submit">Cari</button>
            </form>
            <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>

    </nav>

    <div class="slider-container">
        <div class="slider-images">
            <img class="slider-image" src="../img/galaxy-s23-series-home-kv-1440x640.webp" alt="">
            <img class="slider-image" src="../img/f5.webp" alt="">
            <img class="slider-image" src="../img/redmi12.webp" alt="">
            <!-- Tambahkan gambar lainnya di sini -->
        </div>
    </div>

    <div class="container">
        <aside class="sidebar">
            <h2>Filter by Merk</h2>
            <!-- Form filter merk dengan checkbox -->
            <form action="produk.php" method="get">
                <label>
                    <input type="checkbox" class="filter-checkbox" name="merk[]" value="Xiaomi"> Xiaomi
                </label>
                <label>
                    <input type="checkbox" class="filter-checkbox" name="merk[]" value="Vivo"> Vivo
                </label>
                <!-- Tambahkan checkbox untuk merk lainnya sesuai kebutuhan -->
                <input type="submit" name="filter" value="Filter">
            </form>

        </aside>
        <section>
            <?php if (isset($_GET['search'])) : ?>
            <div class="content normal">
                <h2>Hasil Pencarian</h2>
                <div class="product-content">
                    <?php foreach ($hp as $result) : ?>
                    <a href="detailproduk.php?id=<?php echo $result['id']; ?>" class="product-card">
                        <img src="../assets/<?php echo $result['gambar']; ?>" alt="<?php echo $result['nama']; ?>">
                        <h3>
                            <?php echo $result['nama']; ?>
                        </h3>
                        <?php if (!empty($result['harga_diskon']) && $result['harga_diskon'] > 0) : ?>
                        <p class="original-price">Rp.
                            <?php echo $result['harga']; ?>
                        </p>
                        <p class="discounted-price">Rp.
                            <?php echo $result['harga_diskon']; ?>
                        </p>
                        <?php else : ?>
                        <p class="price">Rp.
                            <?php echo $result['harga']; ?>
                        </p>
                        <?php endif; ?>
                        <div class="rating">⭐⭐⭐⭐</div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php else : ?>
            <div class="content normal">
                <h2>Pilihan Terbaik Kami</h2>
                <div class="product-content">
                    <?php foreach ($hp as $normal) : ?>
                    <?php if ($normal['diskon'] == 0) : ?>
                    <a href="detailproduk.php?id=<?php echo $normal['id']; ?>" class="product-card">
                        <img src="../assets/<?php echo $normal['gambar']; ?>" alt="Product 1">
                        <h3>
                            <?php echo $normal['nama']; ?>
                        </h3>
                        <p class="price">Rp.
                            <?php echo $normal['harga']; ?>
                        </p>
                        <div class="rating">⭐⭐⭐⭐</div>
                    </a>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="content diskon">
                <h2>Lagi Diskon Nih</h2>
                <div class="product-content">
                    <?php foreach ($hp as $product) : ?>
                    <?php if ($product['diskon'] == 1) : ?>
                    <a href="detailproduk.php?id=<?php echo $product['id']; ?>" class="product-card">
                        <img src="../assets/<?php echo $product['gambar']; ?>" alt="<?php echo $product['nama']; ?>">
                        <h3>
                            <?php echo $product['nama']; ?>
                        </h3>
                        <?php if (!empty($product['harga_diskon']) && $product['harga_diskon'] > 0) : ?>
                        <p class="original-price">Rp.
                            <?php echo $product['harga']; ?>
                        </p>
                        <p class="discounted-price">Rp.
                            <?php echo $product['harga_diskon']; ?>
                        </p>
                        <?php else : ?>
                        <p class="price">Rp.
                            <?php echo $product['harga']; ?>
                        </p>
                        <?php endif; ?>
                        <div class="rating">⭐⭐⭐⭐</div>
                    </a>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </section>


    </div>
    <footer class="black-footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Us</h3>
                <ul>
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Our Team</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>About Store</h3>
                <ul>
                    <li><a href="#">Store Locations</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <ul class="social-media-icons">
                    <li><a href="#" target="_blank"><img src="instagram-icon.png" alt="Instagram"></a></li>
                    <li><a href="#" target="_blank"><img src="facebook-icon.png" alt="Facebook"></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="../js/script.js">
        // Handle form submission
        // document.getElementById('filterForm').addEventListener('submit', function (event) {
        //     event.preventDefault(); // Prevent form submission

        //     // Get selected merk values
        //     var selectedMerk = Array.from(document.querySelectorAll('.filter-checkbox:checked'))
        //         .map(function (checkbox) {
        //             return checkbox.value;
        //         });

        //     // Perform filtering based on selectedMerk
        //     filterProducts(selectedMerk);
        // });

        // // Function to filter products based on selected merk
        // function filterProducts(selectedMerk) {
        //     var products = document.querySelectorAll('.product');

        //     products.forEach(function (product) {
        //         var productMerk = product.getAttribute('data-merk');

        //         if (selectedMerk.length === 0 || selectedMerk.includes(productMerk)) {
        //             // Show the product if no merk is selected or if the product's merk is in the selected list
        //             product.style.display = 'block';
        //         } else {
        //             // Hide the product if the product's merk is not in the selected list
        //             product.style.display = 'none';
        //         }
        //     });
        // }

    </script>
</body>

</html>