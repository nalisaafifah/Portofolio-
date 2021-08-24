<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    header('Location: porto.php');
}
$id_projek = $_GET['id_projek']; 

$sql    = "DELETE FROM projek WHERE id_projek='$id_projek'";
$query  = mysqli_query($connect, $sql);

if ($query) {
    header('Location: dataprojek.php');

}else {
    header('Location: admin.php?status=gagal');
}
?>