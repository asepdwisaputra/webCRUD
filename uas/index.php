<?php
include'layout/header.php'; 
$data_barang=select("SELECT * FROM barang");
?>



    <div class="container mt-5">
        <h1>Data Barang</h1>
        <a href="tambah-barang.php" class="btn btn-primary">Tambah</a>
        <table class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach($data_barang as $barang): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $barang['nama']; ?></td>
                    <td><?= $barang['jumlah']; ?></td>
                    <td><?= $barang['harga']; ?></td>
                    <td><?= $barang['tanggal']; ?></td>
                    <td width="15%" class="text-center">
                        <a href="ubah-barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-success" onclick="return confirm('Maaf fitur UBAH sedang dalam perbaikan, silahkan gunakan fitur HAPUS kemudian TAMBAH data baru.')";>Ubah</a>
                        <a href="hapus-barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-danger" onclick="return confirm('Yakin untuk menghapus informasi Barang ini?')";>Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php include'layout/footer.php'; ?>

   