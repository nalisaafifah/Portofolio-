<?php
include 'koneksi.php';
if (isset($_GET['id_skill'])) {
    header('Location: porto.php');
}
$id_projek = $_GET['id_skill']; 

$sql    = "DELETE FROM skill WHERE id_projek='$id_skill'";
$query  = mysqli_query($connect, $sql);

if ($query) {
    header('Location: tampildata.php');

}else {
    header('Location: tampildata.php?status=gagal');
}
?>