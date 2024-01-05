<?php
require('koneksi.php');

$id = $_GET['id'];

$sql = mysqli_query($conn, "DELETE FROM tb_karyawan WHERE id_karyawan = $id");

if ($sql) {
    header("Location: index.php");
}
