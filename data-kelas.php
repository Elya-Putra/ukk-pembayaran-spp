<section>
    <div class="container">
        <div class="row table">
            <a href="?halaman=tambah-kelas">Tambah</a>
            <table>
                <tr>
                    <td>No</td>
                    <td>Id kelas</td>
                    <td>Nama kelas</td>
                    <td>Kompetensi keahlian</td>
                </tr>

                <?php
                    include 'koneksi.php';

                    $no=1;

                    $ambildata = mysqli_query($conn, "SELECT * FROM kelas");
                    while ($ambil = mysqli_fetch_array($ambildata)){

                    
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $ambil['id_kelas'] ?></td>
                    <td><?= $ambil['nama_kelas'] ?></td>
                    <td><?= $ambil['kompetensi_keahlian'] ?></td>
                </tr>

                <?php $no++; } ?>

            </table>
        </div>
    </div>
</section>