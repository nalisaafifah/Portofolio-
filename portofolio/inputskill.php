<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Input Produk</title>
    <style>
        .container {
            padding: 10px 30px;
            border: 2px solid #cd6133;
            border-radius: 10px;
            width: 70%;
        }
        .container h1 {
            font-size: 25px;
            color: black;
            text-align: center;
        }
    </style>
</head>

<body>
    <form method="POST" name="forminput">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="container mt-5">
                        <h1 class="mb-3 mt-4">Input Data Skill</h1>
                        <form action="simpan.php" method="POST">  
                        <div class="form-group row ">
                                <label for="id" class="col-sm-8 col-form-label">Id Skill</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control " name="id_skill">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="nama" class="col-sm-8 col-form-label">Nama Skill</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control " name="nama_skill">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Gambar" class="col-sm-8 col-form-label">Gambar Skill</label>
                                <div class="col-sm-12">
                                    <input type="url" class="form-control mb-2" id="gambar" name="gambar">
                                </div>
                            </div>
                        </form>
                        <center>
                        <input type="submit" name="simpan" value="Submit" class="btn btn-outline-dark mt-2 mb-3">
                        </center>
                    </div>
                </div>
            </div>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $id_skill = $_POST['id_skill'];
        $nama_skill = $_POST['nama_skill'];
        $gambar_skill= $_POST['gambar'];
        $sql = "INSERT INTO skill (id_skill,nama_skill,gambar,) 
        VALUES ('$id_skill','$nama_skill',$gambar_skill')";
        $query = mysqli_query($connect, $sql);

        if ($query) {
            echo ('Location:tampildata.php');
        } else {
            header('location:tampildata.php?status=gagal');
        }
    }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>