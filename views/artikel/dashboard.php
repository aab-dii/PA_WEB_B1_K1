<?php
@include '../../koneksi/config.php';

session_start();

if(!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

$result = mysqli_query($conn, "SELECT * FROM artikel");

$artikel = [];

while ($row = mysqli_fetch_assoc($result)){
    $artikel [] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/dashboard.css">
    <title>Admin Page</title>
</head>
<body>
<nav class="sidebar">
        <ul>
            <li class="dashboard"><a href="#">Dashboard</a></li>
            <li class="barang"><a href="../product/dashboard.php">Kelola Barang</a></li>
            <li class="artikel"><a href="#">Kelola Artikel</a></li>
            <li class=""><a href="#">Layanan</a></li>
            <li class="Logout"><a href="#">Log Out</a></li>
        </ul>
    </nav>
    <section>
        <div class="container-content">
            <button class="add-button"><a href="add.php">Tambah</a></button>
            <div class="wrap">
                <div class="main-content-lihat">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Tanggal</th>
                                <th>Jenis</th>
                                <th>Tentang</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; foreach($artikel as $art): ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $art["judul"]; ?></td>
                                    <td><?php echo substr($art["isi"], 0, 25) . "..."; ?></td>
                                    <td><?php echo $art["tanggal"]; ?></td>
                                    <td><?php echo $art["jenis"]; ?></td>
                                    <td><?php echo $art["tentang"]; ?></td>
                                    <td><img src="../../assets/artikel/<?php echo $art["gambar"] ?>" alt="" width="100px"height="100px"></td>
                                    <td class="action">
                                    <button class="edit-btn"><a href="edit.php?id=<?php echo $art['id']; ?>">Update</a></button>
                                    <button class="delete-btn" onclick="confirmDelete(<?php echo $art['id']; ?>)">Delete</button>
                                    </td>
                                </tr>
                                <?php $i++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script>
    function confirmDelete(id) {
        var result = confirm("Are you sure you want to delete?");
        if (result) {
            // Jika pengguna menekan OK, arahkan ke halaman delete.php dengan ID yang sesuai
            window.location.href = 'delete.php?id=' + id;
        }
        // Jika pengguna menekan Cancel, tidak ada tindakan tambahan yang diambil
    }
</script>
</body>
</html>
