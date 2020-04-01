<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Karyawan</title>
    
</head>
<body>
    <?php
        session_start();

        if($_SESSION['status']!="login"){
            header("location:login.php");
        }else{
            header("location:dashboard.php");
        }
    ?>
</body>
</html>