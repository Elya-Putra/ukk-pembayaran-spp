<section>
    <div class="container">
        <div class="row tambah-data">
            <form action="" method="POST">
                <label for="id_kelas">id_kelas</label>
                <input type="text" name="id_kelas" id="id_kelas" placheholder="id_kelas">
                <label for="nama_kelas">nama_kelas</label>
                <input type="text" name="nama_kelas" id="nama_kelas" placheholder="nama_kelas">
                <label for="kompetensi_keahlian">kompetensi_keahlian</label>
                <input type="text" name="kompetensi_keahlian" id="kompetensi_keahlian" placheholder="kompetensi_keahlian">
                <button name="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
</section>

<?php

    include 'koneksi.php';

    if(isset($_POST['submit'])){
        echo "diklik";
        $id_kelas = addslashes($_POST['id_kelas']);
        $nama_kelas = addslashes($_POST['nama_kelas']);
        $kompetensi_keahlian = addslashes($_POST['kompetensi_keahlian']);

        $cek = mysqli_query($conn, "SELECT id_kelas FROM kelas WHERE id_kelas = '". $id_kelas ."' ");

        if(mysqli_num_rows($cek)>0){
            echo "id sudah ada";
        }else{
            $simpan	= mysqli_query($conn, "INSERT INTO kelas (id_kelas, nama_kelas, kompetensi_keahlian) VALUES ('".$id_kelas."', '".$nama_kelas."', '".$kompetensi_keahlian."')");

            if($simpan){
                echo "berhasil disimpan";
            }else{
                echo "error";
            }
        }
    }
?>