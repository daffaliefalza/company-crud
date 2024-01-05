<?php

require('koneksi.php');

$id = $_GET['id'];

$result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_karyawan WHERE id_karyawan = $id"));



if (isset($_POST['submit'])) {
    $nip = $_POST['nip'];
    $nama_karyawan = $_POST['nama_karyawan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $foto = $_POST['foto'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE tb_karyawan SET
                            nip = '$nip',
                            nama_karyawan = '$nama_karyawan',
                            jenis_kelamin = '$jenis_kelamin',
                            email = '$email',
                            foto = '$foto',
                            alamat = '$alamat'
                        WHERE id_karyawan = $id";

    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("Location: index.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ubah Data Karyawan</title>
</head>

<body>
    <h1>Ubah Data Karyawan</h1>

    <form action="" method="post">
        <ul>
            <h3>Nip</h3>

            <li>
                <label for="nip">NIP:</label>
                <input type="text" id="nip" name="nip" value="<?php echo $result["nip"] ?>" />
            </li>
            <li>
                <h3>Nama Karyawan</h3>

                <label for="nama_karyawan">Nama Karyawan:</label>
                <input type="text" id="nama_karyawan" name="nama_karyawan" value="<?php echo $result["nama_karyawan"] ?>" />
            </li>
            <h3>Jenis Kelamin</h3>
            <li>
                <label for="laki-laki">Laki-laki</label>
                <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki" <?php echo ($result["jenis_kelamin"] == "Laki-laki") ? "checked" : ""; ?> />
            </li>
            <li>
                <label for="perempuan">Perempuan</label>
                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" <?php echo ($result["jenis_kelamin"] == "Perempuan") ? "checked" : ""; ?> />
            </li>
            <h3>Email</h3>
            <li>
                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="<?php echo $result["email"] ?>" />
            </li>
            <h3>Foto Karyawan</h3>
            <li>
                <label for="foto">Foto</label>
                <!-- MASIH PAKE TEXT -->
                <input type="text" id="foto" name="foto" value="<?php echo $result["foto"] ?>" />
            </li>
            <h3>Alamat</h3>
            <li>
                <label for="alamat">Alamat</label>
                <br />
                <textarea name="alamat" id="alamat" cols="60" rows="5"><?php echo $result["alamat"]; ?></textarea>
            </li>
            <br />
            <li>
                <button type="submit" value="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>