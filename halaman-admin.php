
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['username']==""){
		header("location:index.php");
	}
	if($_SESSION['level']=="admin"){
	}else{
		header("location:index.php");
    }

	?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="scss/style.css">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <?php
    include 'header.php';
    ?>

    <nav>
        <div class="navbar">
            <div class="container">
                <div class="row nav">
                    <ul>
                        <li>
                            <a href="?halaman=beranda">Beranda</a>
                        </li>
                        <li>
                            <a href="?halaman=data-siswa">Data Siswa</a>
                        </li>
                        <li>
                            <a href="?halaman=data-petugas">Data Petugas</a>
                        </li>
                        <li>
                            <a href="?halaman=data-kelas">Data Kelas</a>
                        </li>
                        <li>
                            <a href="?halaman=data-spp">Data Spp</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="?halaman=transaksi">Transaksi Pembayaran</a>
                        </li>
                        <li>
                            <a href="?halaman=history">History Pembayaran</a>
                        </li>
                        <li>
                            <a href="?halaman=laporan">Generate Laporan</a>
                        </li>
                        <li>
                            <a href="keluar.php">Keluar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <?php
    @$halaman = $_GET['halaman'];

    switch ($halaman) {
        case 'beranda':
            include 'beranda.php';
            break;
        case 'data-siswa':
            include 'data-siswa.php';
            break;
        case 'tambah-siswa':
            include 'tambah-siswa.php';
            break;
        case 'data-petugas':
            include 'data-petugas.php';
            break;
        case 'data-kelas':
            include 'data-kelas.php';
            break;
        case 'tambah-kelas':
            include 'tambah-kelas.php';
            break;
        case 'data-spp':
            include 'data-spp.php';
            break;
        case 'transaksi':
            include 'transaksi.php';
            break;
        case 'history':
            include 'history.php';
            break;
        case 'edit-transaksi':
            include 'edit-transaksi.php';
            break;
        case 'laporan':
            include 'laporan.php';
            break;
            
        case 'tambah-petugas':
            include 'tambah-petugas.php';
            break;
        
        default:
            include 'beranda.php';
            break;
    }
    ?>

    <?php
    include 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>