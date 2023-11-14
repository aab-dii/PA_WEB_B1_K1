<?php
@include '../../koneksi/config.php';

$id = $_GET['id'];
$query = "SELECT * FROM artikel WHERE id=$id";
$result = mysqli_query($conn, $query);
$art = [];
while ($row = mysqli_fetch_assoc($result)){
    $art[] = $row;
};

$art = $art[0];

if (isset($_POST['update'])){
    // Ambil data lainnya dari form
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
        $result = mysqli_query($conn, "UPDATE artikel SET judul='$judul', isi='$isi', tanggal='$tanggal', jenis='$jenis',tentang='$tentang',gambar='$gambar_baru' WHERE id='$id'");

        if ($result){
            echo "
            <script>
                alert('Data berhasil Diubah!');
                document.location.href = 'dashboard.php'
            </script>";
        }
        else{
            echo "
            <script>
                alert('Data Gagal Diubah ! ');
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
    <link rel="stylesheet" href="../../CSS/edit.css">
    <title>Edit Data</title>
    
</head>
    <body>

        <div class="up-box">
            <h1>Update Data</h1>
        </div>
        <a href="dashboard.php"><img class="icon" src="../../img/x_icon.png" alt="x-icon"></a>
            <form action="" method="post" enctype="multipart/form-data">
            <label for="judul">Judul :</label>
            <input type="text" id="judul" name="judul" required>

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
            <input type="file" id="gambar" name="gambar" accept="image/*" required>

            <input type="submit" name="update" value="Update Data">
        </form>
    </body>
</html>

    