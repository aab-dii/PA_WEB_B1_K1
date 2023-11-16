<?php
session_start();
include '../koneksi/config.php';

session_start();
if (!isset($_SESSION['login']) || ($_SESSION['login'] !== true) || (isset($_SESSION['username']) && $_SESSION['username'] !== 'admin')){
    header('Location: ../../index.php');
 exit();
}
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/dashboard_awal.css">
    <link rel="stylesheet" type="text/css" href="admin.css?v=1.1">



    <title>Admin</title>

</head>

<body>
    <nav>
        <ul>
            <li><img src="../assets/account.png" alt=""></li>
            <li>admin</li>
        </ul>
    </nav>

    <nav class="sidebar">
        <ul>
            <li class="dashboard"><a href="#">Dashboard</a></li>
            <li class="barang"><a href="product/dashboard.php">Kelola Barang</a></li>
            <li class="artikel"><a href="artikel/dashboard.php">Kelola Artikel</a></li>
            <li class="Logout"><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>
    <section>
        <div class="wrapper">
            <div class="top-wrapper">
                <h3>Dashboard</h3>
            </div>
            <div class="mid-wrapper">
                <div class="user-count">
                    <div class="user-top">
                        
                        <?php $result = mysqli_query($conn, "SELECT *, COUNT(*) AS numrows FROM pengguna WHERE id != 1");
                    $row = mysqli_fetch_array($result);
                    echo "
                    <div class='content'>
                    <h2>" . $row['numrows'] . "</h2>
                    <p>Number of User</p>
                    
                    </div>
                    
                    ";
                    ?>
                    <div class="icon">
                        <img src="../assets/group.png" alt="">
                    </div>
                </div>
                <div class="user-bottom">
                    <div class="keterangan">
                        <p>More info</p>
                        <img src="../assets/arrow-right.png" alt="" width="20px">
                    </div>
                    
                </div>
            </div>
            
            <div class="user-count">
                <div class="user-top">
                    
                    <?php $result = mysqli_query($conn, "SELECT *, COUNT(*) AS numrows FROM hp_form");
                    $row = mysqli_fetch_array($result);
                    echo "
                    <div class='content'>
                    <h2>" . $row['numrows'] . "</h2>
                    <p>Number of Product</p>
                    
                    </div>
                    
                    ";
                    ?>


<div class="icon">
    <img src="../assets/product.png" alt="">
</div>
</div>
<div class="user-bottom">
    <div class="keterangan keterangan2">
        <p>More info</p>
        <img src="../assets/arrow-right.png" alt="" width="20px">
    </div>
    
</div>
</div>

<div class="user-count">
    <div class="user-top">
        
        <?php $result = mysqli_query($conn, "SELECT *, COUNT(*) AS numrows FROM artikel");
                    $row = mysqli_fetch_array($result);
                    echo "
                <div class='content'>
                <h2>" . $row['numrows'] . "</h2>
                <p>Number of Article</p>
                
                </div>
                
                ";
                ?>
                    <div class="icon">
                        <img src="../assets/artikel.png" alt="">
                    </div>
                </div>
                <div class="user-bottom">
                    <div class="keterangan">
                        <p>More info</p>
                        <img src="../assets/arrow-right.png" alt="" width="20px">
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <!-- <h1>Welcome Admin</h1> -->
    
    
</section>
</body>

</html>