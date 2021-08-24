<?php
include 'koneksi.php';
$id = $_GET['id_projek'];
$sql    = "SELECT * FROM projek WHERE id_projek='$id'";
$query  = mysqli_query($connect, $sql);
$projek = mysqli_fetch_assoc($query);

?>


<!doctype html>
<html lang="en">

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- font awesome -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


<!-- font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

<!-- j -->
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
    crossorigin="anonymous"></script>

<style>
    .form-group button {
        margin-left: 95%;
        width: 100px;
        background-color: #17a2b8;
    }
</style>

</style>
<title>edit</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="container" style="margin-top:70px">

                <div class="container mt-5">
                    <div class="card">
                        <h4 class="mt-3 mb-3 text-black text-center">Edit Projek</h4>

                        <div class="card-body" style="padding: 0;">
                            <form action="simpanedit.php" method="post">
                                <input type="text" hidden name="id_projek" value="<?= $projek['id_projek'] ?>">
                                <div class="form-group row justify-content-center">
                                    <label for="" class="col-sm-3 col-form-label mb-3">Gambar</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="gambar" class="col-md-10"
                                            placeholder="Masukkan link gambar" value="<?= $projek['gambar'] ?>">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="" class="col-sm-3 col-form-label mb-3">Nama projek</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="nama_projek" class="col-md-10"
                                            value="<?= $projek['nama_projek'] ?>">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="" class="col-sm-3 col-form-label mb-3">Deskripsi</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="deskripsi" class="col-md-10"
                                            value="<?= $projek['deskripsi'] ?>">
                                    </div>
                                </div>


                                <div class="form-group row justify-content-center">
                                    <div class="col-sm-7">
                                        <button class="btn mt-3 mb-2 text-white fw-bold" style="background-color: #6A89CC;letter-spacing: 2px;" type="submit"
                                            name="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <footer class="page-footer font-small mt-1">
        <div class="footer-copyright text-center text-white py-3"> <i class="fas fa-store"></i>
            </svg>Starbhak Mart</div>
    </footer> -->

    <?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id_projek'];
    $nama = $_POST['nama_projek'];
    $gambar = $_POST['gambar'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "UPDATE projek SET nama_projek='$nama', gambar='$gambar', deskripsi='$deskripsi' WHERE id_projek='$id'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: porto.php');
    } else {
        header('location: simpanedit.php?status=gagal');
    }
}
?>


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>