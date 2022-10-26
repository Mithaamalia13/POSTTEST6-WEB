<?php
    include 'koneksi.php';

    if (isset($_POST['log-in'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $ambil = mysqli_query($koneksi,"SELECT * FROM `admin` WHERE username = '$username'");

        if(mysqli_num_rows($ambil) === 1){
            $data = mysqli_fetch_assoc($ambil);
            if(password_verify($password,$data['password'])){
                header("location:admin.php");
                exit();
            }else{
                echo "<script>
                alert('Username atau password salah');
                window.location = 'admin.php';
                </script>";
            }
        }else{
            echo "<script>
            alert('Username atau password salah');
            window.location = 'login.php';
            </script>";
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
    <link rel="stylesheet" href="stylesheet/Login.css">
</head>
<body>
    <div class="masuk">
        <h1 class="logo_login"><b>LOGIN</b></h1>
        <form action="" method="POST" role="form">
        <input type="text" name="user" class="form_login" placeholder="Username" autocomplete="off" required></input><br>
        <input type="password" name="pass" class="form_login" placeholder="Password" autocomplete="off" required></input><br>
        <p>Belum memiliki akun? <a href="register.php">SIGN UP</a></p><br>
        <button type="submit" name="log-in" class="tombol_login" value="LOGIN">LOGIN</button>
        </form>
    </div>
    
</body>
</html>