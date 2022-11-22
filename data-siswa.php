<section>
    <div class="container">
        <div class="row table">
            <a href="?halaman=tambah-siswa">Tambah siswa</a>
            <table>
                <tr>
                    <td>No</td>
                    <td>Nisn</td>
                    <td>Nis</td>
                    <td>Nama</td>
                    <td>Id Kelas</td>
                    <td>Alamat</td>
                    <td>No Telp</td>
                    <td>Id Spp</td>
                </tr>
                <?php
                    include 'koneksi.php';

                    $no=1;

                    $ambildata = mysqli_query($conn, "SELECT * FROM siswa");
                    while ($ambil = mysqli_fetch_array($ambildata)){
                        
                    
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $ambil['nisn'] ?></td>
                    <td><?= $ambil['nis'] ?></td>
                    <td><?= $ambil['nama'] ?></td>
                    <td><?= $ambil['id_kelas'] ?></td>
                    <td><?= $ambil['alamat'] ?></td>
                    <td><?= $ambil['no_telp'] ?></td>
                    <td><?= $ambil['id_spp'] ?></td>
                </tr>
                <?php $no++; } ?>
            </table>
        </div>
    </div>
</section>