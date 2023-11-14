<?php
    session_start();
    require "../connect/koneksi.php";

    $result = mysqli_query($conn, "select * from pengguna");

    $informasi = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $informasi[] = $row;
    }

    if(!isset($_SESSION['login'])) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Database Akun User</title>
        <link rel="stylesheet" href="./admin.css"> 
    </head>
    <body>
        <form action="" method="POST">
            <section>
                <header>
                    <table border=2px>
                        <div class="admin">
                            <div class="section">
                                <p>Database Akun User</p>
                                <tbody>
                                    <?php date_default_timezone_set("Asia/Makassar"); echo "Hari Di Samarinda Sekarang: ", date('l, d F Y, H:i:sa')?><br>
                                    
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Foto</th>
                                            <th colspan="2">Edit/Hapus</th>
                                        </tr>
                                    <?php $i = 1;
                                        foreach ($informasi as $if) : 
                                    ?>
                                    <tr>
                                        <td> <?= $i; ?> </td>
                                        <td> <?php echo $if["username"] ?> </td>
                                        <td> <?= $if["email"] ?> </td>
                                        <td> <?= $if["password"] ?> </td>
                                        <td> <img style='display:block;' width='200px' height='200px'  src="../img/<?= $if['gambar'] ?>"> </td>
                                        <td><a href="../connect/edit.php?id=<?=$if["id"];?>">Edit</a></td>
                                        <td><a href="../connect/delete.php?id=<?=$if["id"];?>">hapus</a></td>
                                    </tr>
                                    <?php $i++;
                                        endforeach; ?>
                                </tbody>
                            </div>
                        </div>
                    </table>
                </header>
            </section>
        </form>
    </body>
</html>