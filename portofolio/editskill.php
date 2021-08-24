<?php
include 'koneksi.php';
$id_skill = $_GET['id_skill'];
$sql    = "SELECT * FROM skill WHERE id_skill='$id_skill'";
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



<style>
    .form-group button {
        margin-left: 50%;
        width: 100px;

    }

    .container {
        padding: 5px 30px;
        margin: 30px;
        border: 1px solid grey;
        width: 50%;

    }
</style>

</style>
<title>Edit Skill Data</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container mt-5">
                    <h4 class="mt-4 mb-4 " style="text-align:center">Edit Skill</h4>

                    <form action="simpan.php" method="POST">
                        <input type="text" hidden name="id_projek" value="<?= $skill['id_skill']; ?>">
                        <div class="form-group row ">
                            <label for="" class="col-sm-9 col-form-label">Nama Skill</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control mb-2" name="nama" class="col-md-11"
                                    value="<?= $skill['nama_skill']; ?>">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="" class="col-sm-8 col-form-label">Gambar</label>
                            <div class="col-sm-12">
                                <input type="url" class="form-control mb-2" name="gambar" class="col-md-11"
                                    value="<?= $skill['gambar']; ?>">
                            </div>
                        </div>


                        <!-- <div class="form-group row"> -->
                        <!-- <div class="col-sm-15"> -->
                        <center>
                            <button class="btn mt-3 mb-3 text-white  btn-primary" type="submit"
                                name="submit">Update</button>
                        </center>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $id_skill = $_POST['id_skill'];
    $nama = $_POST['nama_skill'];
    $gambar = $_POST['gambar'];

    $sql = "UPDATE skill SET nama_skill='$nama', gambar='$gambar'' WHERE id_skill='$id_skill'";
    $query = mysqli_query($connect, $sql); 
    if ($query) {
        header('Location: tampildata.php');
    } else {
        header('location: simpanskill.php?status=gagal');
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