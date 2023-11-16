<?php
@include '../../koneksi/config.php';

session_start();
if (!isset($_SESSION['login']) || ($_SESSION['login'] !== true) || (isset($_SESSION['username']) && $_SESSION['username'] !== 'admin')){
    header('Location: ../../index.php');
 exit();
}

$result = mysqli_query($conn, "SELECT * FROM hp_form");

$hp = [];

while ($row = mysqli_fetch_assoc($result)){
    $hp [] = $row;
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
            <li class="dashboard"><a href="../dashboard.php">Dashboard</a></li>
            <li class="barang"><a href="#">Kelola Barang</a></li>
            <li class="artikel"><a href="../artikel/dashboard.php">Kelola Artikel</a></li>
            <li class="Logout"><a href="../logout.php">Log Out</a></li>
        </ul>
    </nav>
    <section>
        <div class="header">
            <h1><span>Dashboard </span>Barang</h1>
            <div class="waktu">
                <?php echo date('l'); ?>
                <?php echo date('Y-m-d '); ?>
                <div id="liveClock"></div>
            </div>
        </div>
        <div class="container-content">
            <button class="add-button"><a href="add.php">Tambah</a></button>
            <div class="wrap">
                <div class="main-content-lihat">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Merk</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Harga Diskon</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Diskon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; foreach($hp as $hp): ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $hp["nama"]; ?></td>
                                    <td><?php echo $hp["merk"]; ?></td>
                                    <td><?php echo $hp["stok"]; ?></td>
                                    <td><?php echo $hp["harga"]; ?></td>
                                    <td><?php echo $hp["harga_diskon"]; ?></td>
                                    <td><?php echo substr($hp["deskripsi"], 0, 25) . "..."; ?></td>
                                    <td><img src="../../assets/<?php echo $hp["gambar"] ?>" alt="" width="100px"height="100px"></td>
                                    <td><?php echo $hp["diskon"]; ?></td>
                                    <td class="action">
                                    <button class="edit-btn"><a href="edit.php?id=<?php echo $hp['id']; ?>">Update</a></button>
                                    <button class="delete-btn" onclick="confirmDelete(<?php echo $hp['id']; ?>)">Delete</button>
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
    function updateClock() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();

    // Format the time to ensure two digits
    hours = hours < 10 ? '0' + hours : hours;
    minutes = minutes < 10 ? '0' + minutes : minutes;
    seconds = seconds < 10 ? '0' + seconds : seconds;

    // Display the time
    var currentTime = hours + ':' + minutes + ':' + seconds;
    document.getElementById('liveClock').innerText = currentTime;
}

// Update the clock every second
setInterval(updateClock, 1000);

// Initial call to display the clock immediately
updateClock();
</script>
</body>
</html>
