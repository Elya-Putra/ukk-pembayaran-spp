<?php
session_start();

include 'koneksi.php';
/*if (isset($_SESSION['username'])) {
  header("Location: index.php");
}*/
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="scss/style.css">
  </head>
  <body>
    <div class="container">
        <div class="row box-input">
            <h2>Login</h2>
            <form action="" method="POST">
                <label for="username">Username</label><br/>
                <input type="text" name="username" id="username" placeholder="Masukan Username"><br/>
                <label for="password">Password</label><br/>
                <input type="text" name="password" id="password" placeholder="Masukan Password"><br/>
                <button class="btn" name="login">Login</button>
                <p>Belum punya akun? <a href="register.php">Register</a></p>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['login'])) {
        $username = ($_POST['username']);
        $password = ($_POST['password']);
   
      $login = mysqli_query($conn, "SELECT * FROM petugas WHERE username='$username' and password='$password'");
      $cek = mysqli_num_rows($login);
      if ($cek > 0) {
        $data = mysqli_fetch_assoc($login);

        if($data['level']=="admin"){
    
            $_SESSION['username'] = $username;
            $_SESSION['id_petugas'] = $id_petugas;
            $_SESSION['level'] = "admin";
            header("location:halaman-admin.php");
    
        }else if($data['level']=="petugas"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "petugas";
            header("location:halaman-petugas.php");
    
        }else if($data['level']=="siswa"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "siswa";
            header("location:halaman-siswa.php");
    
        }else{
          echo "<script>alert('Error. Silahkan coba lagi!')</script>";
        }
      } else {
          echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
      }
  }
  ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>