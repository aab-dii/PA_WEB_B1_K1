<?php
@include '../../koneksi/config.php';

session_start();
if (!isset($_SESSION['login']) || ($_SESSION['login'] !== true) || (isset($_SESSION['username']) && $_SESSION['username'] !== 'admin')){
    header('Location: index.php');
    exit();
}

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
    <link rel="stylesheet" href="../../CSS/form.css">
    <title>Edit Data</title>
    
</head>
<body>  
    <section>
        <form class="form" action="" method="post" enctype="multipart/form-data">

            <span class="title">Update</span>
            <a href="dashboard.php"><img class="icon" src="../../img/x_icon.png" alt="x-icon"></a>
            <label for="judul">Judul :</label>
            <input type="text" id="judul" name="judul" value="<?php echo $art['judul']?>" required class="input" autocompleted="off">
            <label for="isi">Isi :</label>
            <textarea id="deskripsi" name="isi" value="<?php echo $art['isi']?>" class="input" required></textarea>
            <label for="tanggal">Tanggal :</label>
            <input type="text" id="tanggal" name="tanggal" value="<?php echo $art['tanggal']?>" class="input" name="tanggal" required>
            <label for="jenis">Jenis :</label>
            <input type="text" id="jenis" name="jenis" value="<?php echo $art['jenis']?>" class="input" required>
            <label for="tentang">Tentang :</label>
            <select id="tentang" name="tentang">
                <option class="input" value="Toko">Toko</option>
                <option class="input" value="Global" selected>Global</option>
            </select>
            <label for="gambar">Gambar :</label>
            <img src="../../assets/artikel/<?php echo $art["gambar"] ?>" alt="" width="100px"height="100px">
            <input type="file" id="gambar" name="gambar" class="input" required>
            <button type="submit" name="update" class="submit">Update Data</button>
        </form>
        </section>
    </body>
</html>

    