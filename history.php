<section>
    <div class="container">
        <div class="row table">
            <table>
                <tr>
                    <td>No</td>
                    <td>Id pembayaran</td>
                    <td>Id Petugas</td>
                    <td>Nisn</td>
                    <td>Tanggal</td>
                    <td>Bulan</td>
                    <td>Tahun</td>
                    <td>Id spp</td>
                    <td>Jumlah bayar</td>
                    <td>opsi</td>
                </tr>

                <?php
                    include 'koneksi.php';

                    $no=1;

                    $ambildata = mysqli_query($conn, "SELECT * FROM pembayaran");
                    while ($ambil = mysqli_fetch_array($ambildata)){

                    
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $ambil['id_pembayaran'] ?></td>
                    <td><?= $ambil['id_petugas'] ?></td>
                    <td><?= $ambil['nisn'] ?></td>
                    <td><?= $ambil['tgl_bayar'] ?></td>
                    <td><?= $ambil['bulan_dibayar'] ?></td>
                    <td><?= $ambil['tahun_dibayar'] ?></td>
                    <td><?= $ambil['id_spp'] ?></td>
                    <td><?= $ambil['jumlah_bayar'] ?></td>
                    <td>
                        <a href="halaman-admin.php?halaman=edit-transaksi&id_pembayaran=<?= $ambil['id_pembayaran']?>"><button class="btn">Edit <i class="fa-solid fa-pen-to-square"></i></button></a>
                        <a href="hapus.php?id_pembayaran=<?= $ambil['id_pembayaran'] ?>" onclick = "return confirm('Yakin ingin dihapus?')" ><button class="btn">Hapus <i class="fa-solid fa-trash"></i></button></a>
                    </td>
                </tr>

                <?php $no++; } ?>

            </table>
        </div>
    </div>
</section>