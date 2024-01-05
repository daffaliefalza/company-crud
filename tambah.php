<?php
require('koneksi.php');

if (isset($_POST['submit'])) {

  $nip = $_POST['nip'];
  $nama_karyawan = $_POST['nama_karyawan'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $email = $_POST['email'];
  $foto = 'img1.jpg';
  $alamat = $_POST['alamat'];

  $queryAdd = "INSERT INTO tb_karyawan VALUES(null, '$nip', '$nama_karyawan', '$jenis_kelamin', '$email','$foto', '$alamat')";

  $sql = mysqli_query($conn, $queryAdd);

  if ($sql) {
    echo "<script>
            alert('data berhasil ditambah');
            window.location.href = 'index.php';
          </script>";
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah Data Karyawan</title>
</head>

<body>
  <h1>Tambah Data Karyawan</h1>

  <form action="" method="post">
    <ul>
      <h3>Nip</h3>

      <li>
        <label for="nip">NIP:</label>
        <input type="text" id="nip" name="nip" />
      </li>
      <li>
        <h3>Nama Karyawan</h3>

        <label for="nama_karyawan">Nama Karyawan:</label>
        <input type="text" id="nama_karyawan" name="nama_karyawan" />
      </li>
      <h3>Jenis Kelamin</h3>
      <li>
        <label for="laki-laki">Laki-laki</label>
        <input type="radio" id="laki-laki" name="jenis_kelamin" value="laki-laki" />
      </li>
      <li>
        <label for="perempuan">Perempuan</label>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" />
      </li>
      <h3>Email</h3>
      <li>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" />
      </li>
      <h3>Foto Karyawan</h3>
      <li>
        <label for="foto">Foto</label>
        <input type="file" id="foto" name="foto" />
      </li>
      <h3>Alamat</h3>
      <li>
        <label for="alamat">Alamat</label>
        <br />
        <textarea name="alamat" id="alamat" cols="60" rows="5"></textarea>
      </li>
      <br />
      <li>
        <button type="submit" value="submit" name="submit">Tambah Data</button>
      </li>
    </ul>
  </form>
</body>

</html>