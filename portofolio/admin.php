<?php 
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Dashboard | Admin</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="styleadmin.css">
    <link rel="stylesheet" href="components.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <style>
        .uk {
            font-size: 100px;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg" style=" background-color:  #6A89CC; "></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <!-- <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li> -->
                    </ul>

                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" class="nav-link  nav-link-lg ">

                            <div class="d-sm-none d-lg-inline-block">Hi, Admin</div>
                        </a>

                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="admin.php">Admin</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="admin.html">St</a>
                    </div>
                    <ul class="sidebar-menu">
                        <!-- <li class="menu-header">Dashboard</li> -->
                        <li class="nav-item">
                            <a href="admin.php" class="nav-link"><span>Dashboard</span></a>
                        </li>
                        <li class="menu-header">Data</li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="">
                                <span>About</span></a>
                        </li>
                        <li class=""><a class="nav-link" href="data-skill.php">
                                <span>Skills</span></a></li> -->
                        <li class="nav-item">
                            <a href="dataprojek.php" class="nav-link"><span>Project</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="datapesan.php" class="nav-link"><span>Messages</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="porto.php" class="nav-link has-">Home Page</a>
                        </li>
                </aside>
            </div>

            <div class="main-content mt-5">
                <section id="section">
                <div class="container">
                    <div class="row float-start justify-content-center">
                        <div class="col-4 m-4">
                            <div class="card text-center mt-5" style="width: 20rem; box-shadow: 1px 1px 8px rgba(0,0,0,0.2);" >
                            <p class="mt-4"><i class="bi bi-cast uk"></i></p>
                                <div class="card-body text-white">
                                    <h5 class="card-title text-center" style="color: #6A89CC">Project Page</h5>
                                    <a href="dataprojek.php" class="btn btn-light">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 m-4">
                            <div class="card text-center mt-5" style="width: 20rem; box-shadow: 1px 1px 8px rgba(0,0,0,0.2);" >
                            <p class="mt-4"><i class="bi bi-chat-left-text uk"></i></p>
                                <div class="card-body text-white">
                                    <h5 class="card-title text-center" style="color: #6A89CC">Message Page</h5>
                                    <a href="datapesan.php" class="btn btn-light">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>

            </div>


            <!-- General JS Scripts -->
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
            <script src="../assets/js/stisla.js"></script>

            <!-- JS Libraies -->

            <!-- Template JS File -->
            <script src="../assets/js/scripts.js"></script>
            <script src="../assets/js/custom.js"></script>

            <!-- Page Specific JS File -->
</body>

</html>