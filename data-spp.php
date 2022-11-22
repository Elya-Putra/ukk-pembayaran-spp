<section>
    <div class="container">
        <div class="row table">
            <table>
                <tr>
                    <td>No</td>
                    <td>Id spp</td>
                    <td>Nisn</td>
                    <td>Nama</td>
                    <td>Id kelas</td>
                    <td>Tahun</td>
                    <td>Nominal</td>
                    <td>Dibayar</td>
                </tr>

                <?php
                    include 'koneksi.php';

                    $no=1;

                    $ambildata = mysqli_query($conn, "SELECT * FROM spp,siswa WHERE spp.id_spp = siswa.id_spp");
                    while ($ambil = mysqli_fetch_array($ambildata)){

                    
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $ambil['id_spp'] ?></td>
                    <td><?= $ambil['nisn'] ?></td>
                    <td><?= $ambil['nama'] ?></td>
                    <td><?= $ambil['id_kelas'] ?></td>
                    <td><?= $ambil['tahun'] ?></td>
                    <td><?= $ambil['nominal'] ?></td>
                    <td><?= $ambil['total_bayar'] ?></td>
                </tr>

                <?php $no++; } ?>

            </table>
        </div>
    </div>
</section>