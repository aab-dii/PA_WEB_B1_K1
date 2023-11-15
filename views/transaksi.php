<?php

session_start();

require '../koneksi/config.php';

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

// if(!isset($_POST['quantity'])) {
//     $_SESSION['error_message'] = "Anda harus mengakses halaman ini melalui formulir pembelian.";
//     header("Location: produk.php");
//     exit;
// }

$id_barang = $_SESSION['id_barang'];
$id_pengguna = $_SESSION['id'];
$qty = $_SESSION['qty'];
    
    // Koneksi ke database

    // Query SQL untuk mengambil data HP
$query_hp = "SELECT * FROM hp_form WHERE id = $id_barang";
$result_hp = mysqli_query($conn, $query_hp);

    // // Query SQL untuk mengambil data pengguna
$query_user = "SELECT * FROM pengguna WHERE id = $id_pengguna";    
$result_user = mysqli_query($conn, $query_user);

    // // Inisialisasi variabel sebelum digunakan
$data_hp = [];
$data_user = [];

    // // Periksa apakah query berhasil dijalankan
    if ($result_hp && $result_user) {
        $data_hp = mysqli_fetch_assoc($result_hp);
        $data_user = mysqli_fetch_assoc($result_user);

        // ... (kode selanjutnya)
    } else {
        // Jika terjadi kesalahan dalam menjalankan query
        echo "Error: " . mysqli_error($conn);
    }

    // Tutup koneksi ke database
    
    if(isset($_POST['bayar'])){
        $total = $data_hp['harga'] * $qty;
        if ($data_hp['stok'] >= $qty) {
            $stok = $data_hp['stok'] - $qty;
            $result_hp = mysqli_query($conn, "UPDATE hp_form SET stok='$stok' WHERE id='$id_barang'");
            if (!$result_hp) {
                echo "Error updating stock: " . mysqli_error($conn);
            } else {
                $result = mysqli_query($conn, "INSERT INTO transaksi (id_transaksi, id_pembeli , id_hp, jumlah, harga) VALUES ('','$id_pengguna','$id_barang', '$qty','$total')");
                echo "Pembayaran Berhasil";
                header("Location: produk.php");
            }
        } else {
            echo "Stok tidak mencukupi untuk pembelian ini.";
        }
    }
    mysqli_close($conn);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pembelian</title>
    <link rel="stylesheet" href="../CSS/transaksi.css">
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

    <section class="wrapper">
        <div class="container">
            <div class="form-wrapper cf">
                <div class="five col">
                    <div class="title">
                        <h2>Checkout</h2>
                        <img src="../assets/<?php echo $data_hp['gambar']; ?>" alt="Product Image">
                        <p class="item"><?php echo $data_hp['nama']; ?></p>
                        <p class="price"><?php echo $qty; ?></p>
                        <p class="price">Rp. <?php echo number_format($data_hp['harga'] * $qty); ?></p>
                    </div>
                </div>
            <div class="seven col">
                <form class="form" method="post">
                    <input type="text" name="name" id="name" placeholder="Nama">
                    <input type="text" name="card" id="card" placeholder="Card Number">
                    <div class="submit-wrapper">
                        <input class="submit" type="submit" name="bayar" value="Buy Now">
                    </div>
                </form>
            </div>
            </div>
        </div>
    </section>
    
    <script>
        
        // Fungsi untuk membatalkan pembelian dan kembali ke halaman sebelumnya
        function cancelPurchase() {
        alert("Pembelian dibatalkan");
        window.history.back();
    }

    // Fungsi untuk mengonfirmasi pembelian
    function confirmPurchase() {
        alert("Pembelian berhasil!");
    }
</script>

</body>
</html>
