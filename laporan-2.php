<section>
    <div class="container">
        <div class="row table">
            <table>
                <tr>
                    <td>No</td>
                    <td>Id Pembayaran</td>
                    <td>Id Spp</td>
                    <td>Id Petugas</td>
                    <td>Nama Petugas</td>
                    <td>Nisn</td>
                    <td>Nama</td>
                    <td>Kelas</td>
                    <td>Jurusan</td>
                    <td>Tgl Bayar</td>
                    <td>Jumlah Bayar</td>
                </tr>
                <?php
                    include 'koneksi.php';

                    $no=1;
                    $data = mysqli_query($conn, "SELECT * FROM siswa, kelas WHERE siswa.id_kelas = kelas.id_kelas") or die (mysqli_error($conn));
                    $ambildata = mysqli_query($conn, "SELECT * FROM pembayaran, petugas WHERE pembayaran.id_petugas = petugas.id_petugas") or die (mysqli_error($conn));
                    while ($ambil = mysqli_fetch_array($ambildata)){
                        while ($tampil = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $ambil['id_pembayaran'] ?></td>
                    <td><?= $ambil['id_spp'] ?></td>
                    <td><?= $ambil['id_petugas'] ?></td>
                    <td><?= $ambil['nama_petugas'] ?></td>
                    <td><?= $ambil['nisn'] ?></td>
                    <td><?= $tampil['nama'] ?></td>
                    <td><?= $tampil['nama_kelas'] ?></td>
                    <td><?= $tampil['kompetensi_keahlian'] ?></td>
                    <td><?= $ambil['tgl_bayar'] ?></td>
                    <td><?= $ambil['jumlah_bayar'] ?></td>
                </tr>

                <?php $no++; 
            }
            } ?>

                

            </table>
        </div>
    </div>
</section>