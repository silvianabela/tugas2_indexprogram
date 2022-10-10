<link rel="stylesheet" href="style.css">
<?php
//koneksi kedata base
$conn = mysqli_connect("localhost", "root", "", "db_mahasiswa");
//ambil data dari tb_datamahasiswa atau query datanya
$result = mysqli_query($conn, "SELECT*FROM tb_datamahasiswa");
//ambil data (fetch) mahasiswa dari objek result

//while ($mhs = mysqli_fetch_assoc($result)) {
//var_dump($mhs);
//}

?>
<DOCTYPE html>
<html>
    <head>
        <title>HALAMAN UTAMA</title>
    </head>
    <body background="B1.jpg">
        <h1>DATA MAHASISWA</h1>
        <a href="form_simpanmahasiswa.php">Tambah Data</a>
        <p><a href="login.php">Login</a></p>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No. </th>
                <th>Opsi</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Fakultas</th>
            </tr>

            <?php $i = 1; ?>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $i;?></td>
                <td><a href="ubah.php?id=<?php echo $row['id']; ?>"><input type='button' class='btn-edit'> </a>
                <a href="hapus.php?id=<?php echo $row['id']; ?>"><input type='button' class='btn-hapus'></a></td>
                <td><img src="IMG/<?= $row["gambar"]; ?>" width="50"></td>
                <td><?= $row["nama"];?></td>
                <td><?= $row["id"];?></td>
                <td><?= $row["email"];?></td>
                <td><?= $row["jurusan"];?></td>
                <td><?= $row["fakultas"];?></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
        </table>
    </body>
</html>