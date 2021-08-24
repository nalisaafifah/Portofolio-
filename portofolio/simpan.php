<?php
    if (isset($_POST['simpan'])) {
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];
        $sql = "INSERT INTO pesan (email,pesan) 
        VALUES ('$email','$pesan')";
        $query = mysqli_query($connect, $sql);

        if ($query) {
            echo ('Location: porto.php');
        } else {
            header('location: porto.php?status=gagal');
        }
    }
    ?>