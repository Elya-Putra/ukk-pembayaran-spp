<section>
    <div class="container">
        <div class="row tambah-data">
            <form action="" method="POST">
                <input type="hidden" id="" name="id_pembayaran" placeholder=""></br>
                <label for="id_petugas">Id petugas</label></br>
                <input type="text" id="id_petugas" name="id_petugas" placeholder=""></br>
                <label for="Nisn">Nisn</label></br>
                <input type="text" id="Nisn" name="nisn" placeholder=""></br>
                <label for="tgl_bayar">tgl_bayar</label></br>
                <input type="date" id="tgl_bayar" name="tanggal" placeholder=""></br>
                <select name="bulan" id="">
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                </select></br>
                <select name="tahun" id="">
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select></br>
                <label for="id_spp">id_spp</label></br>
                <input type="text" id="id_spp" name="id_spp" placeholder=""></br>
                <label for="jumlah_bayar">jumlah_bayar</label></br>
                <input type="text" id="jumlah_bayar" name="jumlah" placeholder=""></br>
                <button class="btn" name="submit">Submit</button>
            </form>

                
        </div>
    </div>
</section>

<?php
                    include 'koneksi.php';

                    if(isset($_POST['submit'])){
                        $id_pembayaran = addslashes($_POST['id_pembayaran']);
                        $id_petugas = addslashes($_POST['id_petugas']);
                        $nisn = addslashes($_POST['nisn']);
                        $tgl_bayar = addslashes($_POST['tanggal']);
                        $bulan_dibayar = addslashes($_POST['bulan']);
                        $tahun_dibayar = addslashes($_POST['tahun']);
                        $id_spp = addslashes($_POST['id_spp']);
                        $jumlah_bayar = addslashes($_POST['jumlah']);

                        $cek = mysqli_query($conn, "SELECT id_pembayaran FROM pembayaran WHERE id_pembayaran = '". $id_pembayaran ."' ");

                        if(mysqli_num_rows($cek)>0){
                            echo "id sudah ada";
                        }else{
                            $simpan = mysqli_query($conn, "INSERT INTO pembayaran (id_pembayaran, id_petugas, nisn, tgl_bayar, bulan_dibayar, tahun_dibayar, id_spp, jumlah_bayar) VALUES ('".$id_pembayaran."', '".$id_petugas."', '".$nisn."', '".$tgl_bayar."', '".$bulan_dibayar."', '".$tahun_dibayar."', '".$id_spp."', '".$jumlah_bayar."')");
                
                            if($simpan){
                                echo 'Berhasil Disimpan';
                            }else{
                                echo 'gagal simpan' .mysqli_error($conn);
                
                            }
                        }
                    }
                ?>