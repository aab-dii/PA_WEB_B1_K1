<?php
@include '../../koneksi/config.php';

session_start();
if (!isset($_SESSION['login']) || ($_SESSION['login'] !== true) || (isset($_SESSION['username']) && $_SESSION['username'] !== 'admin')){
    header('Location: ../../index.php');
 exit();
}

$id = $_GET['id'];
$query = "SELECT * FROM hp_form WHERE id=$id";
$result = mysqli_query($conn, $query);
$brg = [];
while ($row = mysqli_fetch_assoc($result)){
    $brg[] = $row;
};

$brg = $brg[0];

if (isset($_POST['update'])){
    // Ambil data lainnya dari form
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

    if (move_uploaded_file($tmp, '../../assets/' . $gambar_baru)) {
        $result = mysqli_query($conn, "UPDATE hp_form SET nama='$nama', merk='$merk', stok='$stok', harga='$harga', harga_diskon='$harga_diskon', deskripsi='$deskripsi',gambar='$gambar_baru', diskon='$diskon' WHERE id='$id'");
        if ($result){
            echo "
            <script>
                alert('Data berhasil diperbarui!');
                document.location.href = 'dashboard.php'
            </script>";
        } else {
            echo "
            <script>
                alert('Data Gagal Diperbarui ! ');
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

            <label for="nama">Nama HP:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $brg['nama']?>" class="input" required>

            <label for="merk">Merk HP:</label>
            <input type="text" id="merk" name="merk" value="<?php echo $brg['merk']?>"class="input" required>

            <label for="stok">Stok HP:</label>
            <input type="number" id="stok" name="stok" value="<?php echo $brg['stok']?>"class="input" required>

            <label for="harga">Harga HP:</label>
            <input type="number" id="harga" name="harga" value="<?php echo $brg['harga']?>"class="input" required>

            <label for="diskon">Diskon:</label>
            <select class="input" id="diskon" name="diskon">
                <option value=1> Ya</option>
                <option value=0 selected>Tidak</option>
            </select>
            
            <label for="harga_diskon">Harga Diskon (opsional):</label>
            <input type="number" id="harga_diskon" name="harga_diskon" value="<?php echo $brg['harga_diskon']?>"class="input">

            <label for="deskripsi">Deskripsi HP:</label>
            <textarea id="deskripsi" name="deskripsi" class="input" required><?php echo $brg['deskripsi']; ?></textarea>

            <label id= "foto" for="foto">Foto HP:</label>
            <img class="gambar" src="../../assets/<?php echo $brg['gambar']; ?>" alt="Gambar Produk" width="100px"height="100px">
            <input type="file" id="foto" name="gambar" required class="input" >

           

            <button type="submit" name="update" class="submit">Update Data</button>
        </form>
        </section>
    </body>
</html>

    