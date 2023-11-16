<?php
@include '../../koneksi/config.php';

session_start();
if (!isset($_SESSION['login']) || ($_SESSION['login'] !== true) || (isset($_SESSION['username']) && $_SESSION['username'] !== 'admin')){
    header('Location: ../../index.php');
 exit();
}

if (isset($_POST['tambah'])){
    $nama = $_POST['nama'];
    $merk = $_POST['merk'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $harga_diskon = $_POST['harga_diskon'];
    $deskripsi = $_POST['deskripsi'];
    $date = date('Y-m-d');
    
    $img = $_FILES['gambar']['name'];
    $explode = explode(',',$img);
    $ekstensi = strtolower(end($explode));
    $gambar_baru = "$date.$nama.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];
    $diskon = $_POST['diskon'];
    
    if(move_uploaded_file($tmp,'../../assets/'.$gambar_baru)){
        $result = mysqli_query($conn, "INSERT INTO hp_form (id, nama, merk, stok, harga,harga_diskon, deskripsi ,gambar, diskon) VALUES ('','$nama','$merk', '$stok','$harga','$harga_diskon','$deskripsi','$gambar_baru','$diskon')");

        if ($result){
            echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'dashboard.php'
            </script>";
        }
        else{
            echo "
            <script>
                alert('Data Gagal Ditambahkan ! ');
                document.location.href = 'dashboard.php'
                </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah HP</title>
    <link rel="stylesheet" href="../../CSS/form.css">
</head>
<body>
    <section>
    <form class="form" action="" method="post" enctype="multipart/form-data">
            <span class="title">Create</span>
            <a href="dashboard.php"><img class="icon" src="../../img/x_icon.png" alt="x-icon"></a>

            <label for="nama">Nama Hp :</label>
            <input type="text" id="nama" name="nama" class="input" required autocompleted="off">

            <label for="merk">Merk HP:</label>
            <input type="text" id="merk" name="merk" class="input" required>

            <label for="stok">Stok HP:</label>
            <input type="number" id="stok" name="stok" class="input" name="tanggal" required>

            <label for="harga">Harga HP:</label>
            <input type="number" id="harga" name="harga" class="input" required>

            <label class="input" for="diskon">Diskon:</label>
            <select id="diskon" name="diskon">
                <option value=1> Ya</option>
                <option value=0 selected>Tidak</option>
            </select>
            
            <label for="harga_diskon">Harga Diskon (opsional):</label>
            <input type="number" id="harga_diskon" name="harga_diskon" class="input" >

            <label for="deskripsi">Deskripsi HP:</label>
            <textarea id="deskripsi" name="deskripsi" required></textarea>

            <label for="gambar">Foto Hp :</label>
            <input type="file" id="gambar" name="gambar" class="input" class="input" required>

            <button type="submit" name="tambah" class="submit">Tambah Data</button>
        </form>
    </section>
</body>
</html>
