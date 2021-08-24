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

    <title>tambah baru</title>
    <style>
        body {
            font-family: sans-serif;
            background-image: url();

        }

        .container {
            padding: 5px 30px;
            margin: 30px auto;
            border: 2px solid grey;
            width: 45%;
            margin-top: 120px;
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
                    <div class="container">
                        <h1 class="mb-5 mt-4">Form Input Projek</h1>
                        <form action="simpan.php" method="post">
                            <div class="form-group row">
                                <label for="Gambar" class="col-sm-4 col-form-label">Gambar Produk</label>
                                <div class="col-sm-8">
                                    <input type="url" class="form-control mb-2" id="gambar" name="gambar">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-4 col-form-label">Nama Produk</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control mb-2" name="nama_projek">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control mb-2" name="deskripsi" id="deskripsi">
                                </div>
                            </div>
                        </form>
                        <input type="submit" name="simpan" value="simpan" class="btn mt-2 mb-3 text-light"
                            style="background-color: #6A89CC; letter-spacing: 3px; box-shadow: 2px 2px 10px rgba(0,0,0,0.2);">
                        <div id="edit-btn">Tambah</div>
                        <a href="admin.php" class="btn text-white mb-4 ms-2 "
                            style="background-color: #6A89CC; letter-spacing: 3px; box-shadow: 2px 2px 10px rgba(0,0,0,0.2);"><i
                                class="fad fa-arrow-to-left me-2"></i>More</a>
                    </div>
                </div>
            </div>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $id = $_POST['id_projek'];
        $nama = $_POST['nama_projek'];
        $deskripsi = $_POST['deskripsi'];
        $gambar = $_POST['gambar'];
        $sql = "INSERT INTO projek (id_projek,nama_projek,gambar,deskripsi) 
        VALUES ('$id', '$nama','$gambar','$deskripsi')";
        $query = mysqli_query($connect, $sql);

        if ($query) {
            echo "<script>alert('Data ditambahkan')</script>";
        } else {
            header('location: simpan.php?status=gagal');
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