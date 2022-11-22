<?php
    include 'koneksi.php';

    if(isset($_GET['id_pembayaran'])){
        $delet = mysqli_query($conn, "DELETE FROM pembayaran WHERE id_pembayaran = '". $_GET['id_pembayaran'] ."' ");
        echo "<script>window.location='/?halaman=history'</script>";
    }
?>
