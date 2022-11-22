<section>
    <div class="container">
        <div class="row table">
            <button onclick="window.print()">Cetak Halaman Web</button>
            <table>
                <tr>
                    <td>No</td>
                    <td>Id Pembayaran</td>
                    <td>Id Petugas</td>
                    <td>Nama Petugas</td>
                    <td>Nisn</td>
                    <td>Nama</td>
                    <td>Kelas</td>
                    <td>Tgl Bayar</td>
                    <td>Id Spp</td>
                    <td>Jumlah Bayar</td>
                </tr>
                <?php
                    include 'koneksi.php';

                    $no=1;

                    $ambildata = mysqli_query($conn, "SELECT * FROM pembayaran, petugas WHERE pembayaran.id_petugas = petugas.id_petugas") or die (mysqli_error($conn));
                    while ($ambil = mysqli_fetch_array($ambildata)){
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $ambil['id_pembayaran'] ?></td>
                    <td><?= $ambil['id_petugas'] ?></td>
                    <td><?= $ambil['nama_petugas'] ?></td>
                    <td><?= $ambil['nisn'] ?></td>
                    <td><?= $ambil['nisn'] ?></td>
                    <td><?= $ambil['nisn'] ?></td>
                    <td><?= $ambil['tgl_bayar'] ?></td>
                    <td><?= $ambil['id_spp'] ?></td>
                    <td><?= $ambil['jumlah_bayar'] ?></td>
                </tr>

                <?php $no++; } ?>
            </table>
        </div>
    </div>
</section>