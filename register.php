<?php
include 'koneksi.php';
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
            <h2>Registrasi</h2>
            <form action="" method="POST">
                <label for="username">Username</label><br/>
                <input type="text" name="username" id="username" placeholder="Masukan Username" required><br/>
                <label for="password">Password</label><br/>
                <input type="text" name="password" id="password" placeholder="Masukan Password" required><br/>
                <label for="cpassword">Ulangi Password</label><br/>
                <input type="text" name="cpassword" id="cpassword" placeholder="Masukan Password" required><br/>
                <label for="petugas">Nama Petugas</label><br/>
                <input type="text" name="nama_petugas" id="petugas" placeholder="Masukan Nama" required><br/>
                <select name="level" id="">
                    <option>Level</option>
                    <option value="Admin">Admin</option>
                    <option value="Petugas">Petugas</option>
                    <option value="Siswa">Siswa</option>
                </select><br/>
                <button class="btn" name="submit">Register</button>
                <p>Sudah punya akun? <a href="index.php">Login</a></p>
            </form>
        </div>
    </div>

    <?php
    
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = ($_POST['password']);
        $cpassword = ($_POST['cpassword']);
        $petugas = $_POST['nama_petugas'];
        $level = $_POST['level'];
     
        if ($password == $cpassword) {
            $sql = "SELECT * FROM petugas WHERE username='$username'";
            $result = mysqli_query($conn, $sql);
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO petugas (username, password, nama_petugas, level)
                        VALUES ('$username', '$password', '$petugas', '$level')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                    header("Location: index.php");
                    $username = "";
                    $_POST['password'] = "";
                    $_POST['cpassword'] = "";
                    $petugas = "";
                    $level = "";
                } else {
                    echo "<script>alert('Terjadi kesalahan.')</script>";
                }
            } else {
                echo "<script>alert('Woops! Username Sudah Terdaftar.')</script>";
            }
             
        } else {
            echo "<script>alert('Password Tidak Sesuai')</script>";
        }
    }
    
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>