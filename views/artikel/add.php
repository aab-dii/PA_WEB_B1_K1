<?php
@include '../../koneksi/config.php';

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
        <label for="judul">Judul :</label>
        <input type="text" id="judul" name="judul" required autocompleted="off">

        <label for="isi">Isi :</label>
        <input type="text" id="isi" name="isi" required>

        <label for="tanggal">Tanggal :</label>
        <input type="text" id="tanggal" name="tanggal" required>

        <label for="jenis">Jenis :</label>
        <input type="text" id="jenis" name="jenis" required>
        
        <label for="tentang">Tentang :</label>
        <select id="tentang" name="tentang">
            <option value="Toko">Toko</option>
            <option value="Global" selected>Global</option>
        </select>

        <label for="gambar">Gambar :</label>
        <input type="file" id="gambar" name="gambar" required>

        <input type="submit" name="tambah" value="Tambah Data">
    </form>

</body>
</html>
