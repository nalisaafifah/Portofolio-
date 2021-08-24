<?php
include 'koneksi.php'
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- bootsrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <title>Hello, world!</title>
    <style>
        .navbar {
            background-color: rgba(106, 137, 204, 0.64);
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);

        }

        .head {
            margin-top: 13%;
            /* margin-bottom: 200px; */
        }

        .head p:first-child {
            font-size: 45px;
            letter-spacing: 7px;
            font-weight: 300;
            line-height: 0;
        }

        .head p:nth-child(2) {
            font-size: 75px;
            margin: 20px 0;
            color: #6A89CC;
            font-weight: bold;
        }

        .head p:nth-child(3) {
            font-size: 40px;
            letter-spacing: 9px;
            color: #2D2D2C;
            font-weight: 300;
        }

        .head button {
            width: 200px;
            border: 1px solid #6A89CC;
            color: #6A89CC;
        }

        /* .dua {
            background-color: aqua;
        } */
        .foto {
            width: 350px;
            height: 350px;
            border-radius: 50%;
            border: 2px solid #6A89CC;
            float: right;
        }

        .w {
            margin-top: 22%;
        }

        .card-body {
            background-color: #E5E5E5;
        }

        .card-tittle {
            padding: 20px 45px;
            font-size: 40px;
            letter-spacing: 3px;
        }

        .card-text {
            font-size: 20px;
            font-weight: 300;
            line-height: 25px;
            letter-spacing: 3px;
            padding: 20px 45px;
            line-height: 30px;
        }

        .text-work1 {
            font-size: 40px;
            letter-spacing: 3px;
            margin-top: 17%;
            margin-bottom: 5%;
        }

        #works {
            margin-top: 5%;
            margin-bottom: 20%
        }

        #works img {
            width: 100px;
            height: 100px;
        }

        #works .card-body {
            align-items: center;
            justify-content: center;

        }

        .ind {
            justify-content: center;
        }

        .msg {
            margin-top: 50%;
            margin-bottom: 25%;
            clear: both;
        }

        #message {
            margin-top: 10%;
        }

        #footer {
            background-color: #6A89CC;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 120px;
        }

        #project {
            margin-top: 10%;

        }

        .cnt {
            margin-bottom: 10%;

        }

        .w {
            width: 85%;
            padding: 0;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">-nad</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-4">
                        <a class="nav-link active" aria-current="page" href="#about">About</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#works">Works</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#message">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formlogin.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar tutup -->

    <!-- about -->
    <section id="home">
        <div class="container">
            <div class="head">
                <div class="row">
                    <div class="col-6">
                        <p>Hello, I'm</p>
                        <p>Nalisa <br> Afifah Duha</p>
                        <p mt-0>a frontend developer.</p>

                        <button type="button" class="btn btn-outline fs-6 mt-3">Learn More</button>
                    </div>
                    <div class="col-6 dua">
                        <img src="foto1.jpeg" alt="" class="foto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about tutup -->

    <!-- card body -->
    <section id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card w">
                    <div class="card-body">
                        <p class="card-tittle fw-bold">About Me</p>
                        <p class="card-text">Hallo Stranger! <br>
                            Nama saya Nalisa Afifah Duha, kalian bisa panggil saya Nalisa, saya merupakan seorang siswi
                            yang
                            bersekolah di SMK Taruna Bhakti Depok dengan jurusan Rekayasa Perangkat Lunak. Saya memiliki
                            passion
                            dibidang frontend</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- card body tutup -->

    <!-- my works -->
    <section id="works">
        <div class="container">
            <div class="work">
                <div class="row">
                    <p class="text-work1 fw-bold text-center">MY WORKS</p>
                </div>

                <!-- card work -->
                <div class="container justify-content-center">
                    <div class="row float-start justify-content-center">
                        <div class="col-3 m-4">
                            <div class="card" style="width: 18rem;">
                                <img src="work10.png" class="card-img-top" style=" width: 18rem; height: 200px;"
                                    alt="...">
                                <div class="card-body text-white" style="background-color: #6A89CC;">
                                    <h5 class="card-title text-center">Web Design</h5>
                                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-3 m-4">
                            <div class="card" style="width: 18rem;">
                                <img src="work2.png" class="card-img-top" style=" width: 18rem; height: 200px;"
                                    alt="...">
                                <div class="card-body text-white" style="background-color: #6A89CC;">
                                    <h5 class="card-title text-center">Web Developer</h5>
                                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-3 m-4">
                            <div class="card" style="width: 18rem;">
                                <img src="work4.png" class="card-img-top" style=" width: 18rem; height: 200px;"
                                    alt="...">
                                <div class="card-body text-white" style="background-color: #6A89CC;">
                                    <h5 class="card-title text-center">UI UX Design</h5>
                                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


    </section>
    <!-- my works tutup -->

    <div class="container" style="clear: both;">
        <br>
        <br>
        <br><br><br><br>
        <hr style="height: 2px;">
    </div>

    <!-- project -->

    <section id="project" style="clear: both;">
        <h4 class="text-work1 fw-bold text-center mt-5">A PROJECT </h4>
        <?php $ambil = $connect->query("SELECT * FROM projek")?>
        <?php  while($projek = $ambil->fetch_assoc()):?>
        <div class="container">
            <div class="row float-start justify-content-evenly">
                <div class="col-3 m-3">
                    <div class="card" style="width: 18rem; border-radius: 10px;">
                        <img src="<?= $projek['gambar'] ?>" class="card-img-top" style=" width: 18rem; height: 200px;"
                            alt="...">
                        <div class="card-body" style="background-color: #6A89CC;">
                            <h5 class="card-title text-center text-white"><?= $projek['nama_projek'] ?></h5>
                            <!-- <p class="card-text"><?= $projek['deskripsi'] ?></p> -->
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php  endwhile; ?>
    <!-- project tutup -->

    <!-- message -->
    <section id="message">
        <div class="container msg">
            <div class="row justify-content-evenly mt-5">
                <div class="col-md-6 float-start">
                    <p class="msg fs-1 fw-bold mt-5" style="letter-spacing: 1px;">Leave a Message <br> for me!</p>
                </div>
                <div class="col-md-6 float-start">
                    <form method="POST" name="forminput">
                        <div class="container">
                            <form action="simpan.php" method="post">
                                <div class="form-group row">
                                    <label for="email" class="col-sm-8 col-form-label">Email</label>
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control mb-2" id="email" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pesan" class="col-sm-8 col-form-label">Pesan</label>
                                    <div class="col-sm-12">
                                        <textarea type="text" class="form-control mb-2" name="pesan"
                                            id="pesan"></textarea>
                                    </div>
                                </div>
                            </form>

                            <input type="submit" name="simpan" class="btn mt-2 mb-3 text-white rounded-pill"
                                style="background-color:#6A89CC ; width:130px;">
                        </div>
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
            //header('location: simpan.php');
        }
    }
    ?>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- message tutup -->


    <!-- footer -->
    <!-- <section id="footer">
         <h3 class="text-white">Find Me On</h3> -->
    <!-- <div class="row">
            <div class="container fs-2 text-white">
                <h3 style="letter-spacing: 3px; margin: 10px">Find Me On</h3>
                <i class="fab fa-instagram"></i>
                <i class="far fa-envelope"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fab fa-line"></i>
            </div>
        </div>
    </section> -->

    <!-- footer tutup -->
    <!-- footer -->
    <section id="footer">
        <div class="container text-center pt-4 mb-3 text-white" style=" font-family : Montserrat, sans-serif;">
            <div class="row">
                <div class="col ">
                    <center>
                        <a href=""> <i class="bi bi-instagram ms-4 mb-3 fs-3" style="color:#fff"></i></a>
                        <a href=""> <i class="bi bi-envelope-fill  ms-4 fs-3" style="color:#Fff"></i></a>
                        <a href=""> <i class="bi bi-whatsapp  ms-4 fs-3" style="color:#Fff"></i></a>
                        <a href=""> <i class="bi bi-  ms-4 fs-3" style="color:#Fff"></i></a>
                    </center>
                </div>
                <p class="mt-3 justify-content-center fw-lighter">©2021 nalisaafifah</p>
            </div>
        </div>
    </section>
    <!-- footer tutup -->





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>