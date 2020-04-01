<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="./asset/style/dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5fd5318cab.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        session_start();

        if($_SESSION['status']!="login"){
            header("location:login.php");
        }    
    ?>

    <header>
        <nav>
            <div id="logo">
                <i class="fas fa-fingerprint"></i>
                <h1>Absensi Online<br>Karyawan</h1>
            </div>
        
            <div id="sign-out">
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a> 
            </div>

        </nav>
    </header>
    <main>
        <aside>
            <div class="sections">
                <h2>Master Data</h2>
                <div class="navlinks">
                    <p><a href="#">List Karyawan</a></p>
                    <p><a href="#">Shift Karyawan</a></p>
                    <p><a href="#">Lokasi Absensi</a></p>
                    <p><a href="#">Departemen Karyawan</a></p>
                </div>
            </div>
            <div class="sections">
            <h2>Report</h2>
            <div class="navlinks">
                <p><a href="#">Absensi Harian</a></p>
                <p><a href="#">Absensi Mingguan</a></p>
                <p><a href="#">Absensi Bulanan</a></p>
                <p><a href="#">Keterlambatan</a></p>
                <p><a href="#">Karyawan Bermasalah</a></p>
            </div>
            </div>
        </aside>
        <div id="content">
            <?php
                include "page/list-karyawan.php";
            ?>
        </div>
    </main>
    <footer>

    </footer>
    
</body>
</html>