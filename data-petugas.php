<section>
    <div class="container">
        <div class="row table">
            <a href="?halaman=tambah-petugas">register</a>
            <table>
                <tr>
                    <td>No</td>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Nama Petugas</td>
                    <td>Level</td>
                </tr>
                <?php
                    include 'koneksi.php';

                    $no=1;

                    $ambildata = mysqli_query($conn, "SELECT * FROM petugas");
                    while ($ambil = mysqli_fetch_array($ambildata)){

                    
                ?>

                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $ambil['username'] ?></td>
                        <td><?= $ambil['password'] ?></td>
                        <td><?= $ambil['nama_petugas'] ?></td>
                        <td><?= $ambil['level'] ?></td>
                    </tr>

                <?php $no++; }?>
            </table>
        </div>
    </div>
</section>