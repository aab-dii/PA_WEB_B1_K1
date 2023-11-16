<?php
@include '../../koneksi/config.php';

session_start();
if (!isset($_SESSION['login']) || ($_SESSION['login'] !== true) || (isset($_SESSION['username']) && $_SESSION['username'] !== 'admin')){
    header('Location: index.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM hp_form WHERE id = $id");

    $barang = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $barang[] = $row;
    }
    
    foreach ($barang as $brg):
    $status=unlink('../../assets/'.$brg['gambar']);    
    if ($status){
        mysqli_query($conn, "DELETE from hp_form where id = $id");      
        echo "
        <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'dashboard.php'
        </script>";
    }
    else{
        mysqli_query($conn, "DELETE from hp_form where id = $id");      
        echo "
        <script>
            alert('Data Gagal Dihapus ! ');
            document.location.href = 'dashboard.php'
            </script>";
    }
    endforeach;
} else {
    echo "ID data yang akan dihapus tidak ditemukan.";
}
?>
