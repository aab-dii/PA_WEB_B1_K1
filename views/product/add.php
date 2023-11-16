<?php
@include '../../koneksi/config.php';

session_start();
if (!isset($_SESSION['login']) || ($_SESSION['login'] !== true) || (isset($_SESSION['username']) && $_SESSION['username'] !== 'admin')){
    header('Location: index.php');
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
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama">Nama HP:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="merk">Merk HP:</label>
        <input type="text" id="merk" name="merk" required>

        <label for="stok">Stok HP:</label>
        <input type="number" id="stok" name="stok" required>

        <label for="harga">Harga HP:</label>
        <input type="number" id="harga" name="harga" required>

        <label for="harga_diskon">Harga Diskon (opsional):</label>
        <input type="number" id="harga_diskon" name="harga_diskon">

        <label for="deskripsi">Deskripsi HP:</label>
        <textarea id="deskripsi" name="deskripsi" required></textarea>

        <label for="foto">Foto HP:</label>
        <input type="file" id="foto" name="gambar" accept="image/*" required>

        <label for="diskon">Diskon:</label>
        <select id="diskon" name="diskon">
            <option value=1> Ya</option>
            <option value=0 selected>Tidak</option>
        </select>

        <input type="submit" name="tambah" value="Tambah Data">
    </form>

</body>
</html>
