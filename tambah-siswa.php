<section>
    <div class="container">
        <div class="row tambah-data">
            <form action="" method="POST">
                <label for="nisn">Nisn</label></br>
                <input type="text" name="nisn" placeholder="" id="nisn"></br>
                <label for="nis">Nis</label></br>
                <input type="text" name="nis" placeholder="" id="nis"></br>
                <label for="nama">nama</label></br>
                <input type="text" name="nama" placeholder="" id="nama"></br>
                <label for="id_kelas">id_kelas</label></br>
                <input type="text" name="id_kelas" placeholder="" id="id_kelas"></br>
                <label for="alamat">alamat</label></br>
                <input type="text" name="alamat" placeholder="" id="alamat"></br>
                <label for="no_telp">no_telp</label></br>
                <input type="text" name="no_telp" placeholder="" id="no_telp"></br>
                <label for="id_spp">id_spp</label></br>
                <input type="text" name="id_spp" placeholder="" id="id_spp"></br>
                <button class="btn" name="submit">Submit</button>
            </form>
        </div>
    </div>
</section>

<?php
                    include 'koneksi.php';

						if(isset($_POST['submit'])){

                            $nisn = $_POST['nisn'];
							$nis = ($_POST['nis']);
							$nama = ($_POST['nama']);
							$id_kelas = ($_POST['id_kelas']);
							$alamat = ($_POST['alamat']);
							$no_telp = ($_POST['no_telp']);
							$id_spp = ($_POST['id_spp']);
					

							$cek = mysqli_query($conn, "SELECT nisn FROM siswa WHERE nisn='". $nisn ."' ");

							if(mysqli_num_rows($cek)>0){
								echo '<div class="alert alert-error">kode sudah digunakan</div>';
							}else{

								$simpan	= mysqli_query($conn, "INSERT INTO siswa (nisn, nis, nama, id_kelas, alamat, no_telp, id_spp) VALUES ('".$nisn."', '".$nis."', '".$nama."', '".$id_kelas."', '".$alamat."', '".$no_telp."', '".$id_spp."')");

								if($simpan){
									echo '<div class="alert alert-success">Berhasil Disimpan</div>';
								}else {
									echo 'gagal simpan' .mysqli_error($conn);
								}
							}

						}
					?>