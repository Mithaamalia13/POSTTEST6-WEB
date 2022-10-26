<?php
    include 'koneksi.php';

    //CREATE
    if (isset($_POST['sign-up'])){
        $nama = $_POST['nama'];
        $username = $_POST['Username'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        $cek_user = mysqli_query($koneksi, "SELECT * FROM `admin` WHERE username='$username'");
        $cek_login = mysqli_num_rows($cek_user);

        if($cek_login > 0){
            echo "<script>
                alert('Username telah terdaftar!');
                window.location = 'register.php';
            </script>";
        }else{
            if($password1 != $password2){
                echo "<script>
                alert('Konfirmasi Password Tidak Sesuai!');
                window.location = 'register.php';
                </script>";
            }else{
                $password = password_hash($password1, PASSWORD_DEFAULT);
                mysqli_query($koneksi, "INSERT INTO `admin` VALUES ('','$nama','$username','$password')");
                echo "<script>
                alert('BERHASIL DAFTAR!');
                window.location = 'login.php';
                </script>";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MounTravelers</title>
    <link rel="stylesheet" href="stylesheet/register.css">
</head>
<body>
    <div class="daftar">
        <h1 class="logo_daftar"><b>SIGN UP</b></h1>
        <form action="" method="POST" role="form">
        <input type="text" name="nama" class="form_daftar" placeholder="Masukkan Nama" autocomplete="off" required></input><br>
        <input type="text" name="Username" class="form_daftar" placeholder="Username" autocomplete="off" required></input><br>
        <input type="password" name="password1" class="form_daftar" placeholder="Password" autocomplete="off" required></input><br>
        <input type="password" name="password2" class="form_daftar" placeholder="Konfirmasi Password" autocomplete="off" required></input><br>
        <p>Sudah memiliki akun? <a href="login.php">LOGIN</a></p><br>
        <button type="submit" name="sign-up" class="tombol_daftar" value="signup">DAFTAR</button>
        </form>
    </div>
    
</body>
</html>