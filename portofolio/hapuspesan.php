<?php
include 'koneksi.php';
if (isset($_GET['email'])) {
    header('Location: porto.php');
}
$email = $_GET['email']; 

$sql    = "DELETE FROM pesan WHERE email='$email'";
$query  = mysqli_query($connect, $sql);

if ($query) {
    header('Location: datapesan.php');

}else {
    header('Location: admin.php?status=gagal');
}
?>