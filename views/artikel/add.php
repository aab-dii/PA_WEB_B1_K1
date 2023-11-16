<?php
@include '../../koneksi/config.php';

session_start();
if (!isset($_SESSION['login']) || ($_SESSION['login'] !== true) || (isset($_SESSION['username']) && $_SESSION['username'] !== 'admin')){
    header('Location: index.php');
 exit();
}

if (isset($_POST['tambah'])){
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal = $_POST['tanggal'];
    $jenis = $_POST['jenis'];
    $tentang = $_POST['tentang'];
    $date = date('Y-m-d');
    
    $img = $_FILES['gambar']['name'];
    $explode = explode(',',$img);
    $ekstensi = strtolower(end($explode));
    $gambar_baru = "$date.$judul.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];
    
    if(move_uploaded_file($tmp,'../../assets/artikel/'.$gambar_baru)){
        $result = mysqli_query($conn, "INSERT INTO artikel (id, judul , isi, tanggal, jenis ,tentang ,gambar) VALUES ('','$judul','$isi', '$tanggal','$jenis','$tentang','$gambar_baru')");

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
            <label for="judul">Judul :</label>
            <input type="text" id="judul" name="judul" class="input" required autocompleted="off">
            <label for="isi">Isi :</label>
            <textarea id="deskripsi" name="isi" class="input" required></textarea>
            <label for="tanggal">Tanggal :</label>
            <input type="text" id="tanggal" class="input" name="tanggal" required>
            <label for="jenis">Jenis :</label>
            <input type="text" id="jenis" name="jenis" class="input" required>
            <label for="tentang">Tentang :</label>
            <select id="tentang" name="tentang">
                <option class="input" value="Toko">Toko</option>
                <option class="input" value="Global" selected>Global</option>
            </select>
            <label for="gambar">Gambar :</label>
            <input type="file" id="gambar" name="gambar" class="input" required>
            <button type="submit" name="tambah" class="submit">Tambah Data</button>
        </form>
        
    </section>
</body>
</html>
