<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id_projek'];
    $nama = $_POST['nama_projek'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];

    $sql = "UPDATE projek SET nama_projek='$nama', gambar='$gambar', deskripsi='$deskripsi' WHERE id_projek='$id'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: dataprojek.php');
    } else {
        header('location: simpanedit.php?status=gagal');
    }
}