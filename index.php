<?php

require('koneksi.php');

$sql = mysqli_query($conn, "SELECT * FROM tb_karyawan");
$no = 1;
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halaman Data Karyawan</title>
</head>

<body>
  <h1>Data Karyawan</h1>
  <a href="tambah.php">Tambah Data Karyawan</a>
  <br /><br />


  <table border="1">
    <thead>
      <th>No</th>
      <th>NIP</th>
      <th>Nama Karyawan</th>
      <th>Jenis Kelamin</th>
      <th>Email</th>
      <th>Foto Karyawan</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </thead>
    <tbody>
      <?php
      while ($result = mysqli_fetch_assoc($sql)) {
      ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $result['nip'] ?></td>
          <td><?php echo $result['nama_karyawan'] ?></td>
          <td><?php echo $result['jenis_kelamin'] ?></td>
          <td><?php echo $result['email'] ?></td>
          <td><img src="img/<?php echo $result['foto'] ?>" width="100" /></td>
          <td><?php echo $result['alamat'] ?></td>
          <td>
            <a href="ubah.php?id=<?php echo $result['id_karyawan'] ?>">Edit Data</a>
            <a href="hapus.php?id=<?php echo $result['id_karyawan'] ?>" onclick="return confirm('yakin')">Hapus Data</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>