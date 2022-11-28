<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Our Collections</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light justify-content-center text-primary">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="index.php">iLectrical</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="about-me.php">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <div class="container-fluid">
        <div class="background">
            <img src="bookshelf.jpg" width="100%">
            <div class="header text-center p-5" style="color: #052c65; font-family: Broadway;">
                <h1>Book Collections</h1>

                <div class="content text-center" style="color: #052c65; font-family: Calibri;">
                    <h4>Total: 6</h4>
                </div>
            </div><!-- end intro-->


            <div class="row row-cols-1 row-cols-md-3 g-4">


                <?php
                include "koneksi.php";
                $sql = "SELECT * FROM `koleksi_buku` WHERE id_buku=1";
                $hasil = mysqli_query($kon, $sql);
                $no = 0;
                while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
                ?>

                <div class="col">
                    <div class="card">
                        <div class="text-center">
                            <img src="img/1.jpg" class="rounded" alt="..." width="40%">
                        </div>
                        <!-- <img src="1.jpg" width="40%"> -->
                        <div class=" card-body">

                            <h5 class="card-title text-center" style="color: #052c65">
                                <a class="nav-link" href='<?php echo $data["link"]; ?>'>
                                    <?php echo $data["judul_buku"]; ?>
                                </a>
                            </h5>
                            <p class="card-text text-center">
                                <?php echo $data["deskripsi"]; ?>
                            </p>

                        </div>
                    </div>
                </div>

                <?php
                }
                ?>

                <?php
                include "koneksi.php";
                $sql = "SELECT * FROM `koleksi_buku` WHERE id_buku=2";
                $hasil = mysqli_query($kon, $sql);
                $no = 0;
                while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
                ?>

                <div class="col">
                    <div class="card">
                        <div class="text-center">
                            <img src="img/2.jpg" class="rounded" alt="..." width="40%">
                        </div>
                        <!-- <img src="1.jpg" width="40%"> -->
                        <div class=" card-body">

                            <h5 class="card-title text-center" style="color: #052c65">
                                <a class="nav-link" href='<?php echo $data["link"]; ?>'>
                                    <?php echo $data["judul_buku"]; ?>
                                </a>
                            </h5>
                            <p class="card-text text-center">
                                <?php echo $data["deskripsi"]; ?>
                            </p>

                        </div>
                    </div>
                </div>

                <?php
                }
                ?>

                <?php
                include "koneksi.php";
                $sql = "SELECT * FROM `koleksi_buku` WHERE id_buku=3";
                $hasil = mysqli_query($kon, $sql);
                $no = 0;
                while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
                ?>

                <div class="col">
                    <div class="card">
                        <div class="text-center">
                            <img src="img/3.jpg" class="rounded" alt="..." width="40%">
                        </div>
                        <!-- <img src="1.jpg" width="40%"> -->
                        <div class=" card-body">

                            <h5 class="card-title text-center" style="color: #052c65">
                                <a class="nav-link" href='<?php echo $data["link"]; ?>'>
                                    <?php echo $data["judul_buku"]; ?>
                                </a>
                            </h5>
                            <p class="card-text text-center">
                                <?php echo $data["deskripsi"]; ?>
                            </p>

                        </div>
                    </div>
                </div>

                <?php
                }
                ?>

                <?php
                include "koneksi.php";
                $sql = "SELECT * FROM `koleksi_buku` WHERE id_buku=4";
                $hasil = mysqli_query($kon, $sql);
                $no = 0;
                while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
                ?>

                <div class="col">
                    <div class="card">
                        <div class="text-center">
                            <img src="img/4.jpg" class="rounded" alt="..." width="40%">
                        </div>
                        <!-- <img src="1.jpg" width="40%"> -->
                        <div class=" card-body">

                            <h5 class="card-title text-center" style="color: #052c65">
                                <a class="nav-link" href='<?php echo $data["link"]; ?>'>
                                    <?php echo $data["judul_buku"]; ?>
                                </a>
                            </h5>
                            <p class="card-text text-center">
                                <?php echo $data["deskripsi"]; ?>
                            </p>

                        </div>
                    </div>
                </div>

                <?php
                }
                ?>

                <?php
                include "koneksi.php";
                $sql = "SELECT * FROM `koleksi_buku` WHERE id_buku=5";
                $hasil = mysqli_query($kon, $sql);
                $no = 0;
                while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
                ?>

                <div class="col">
                    <div class="card">
                        <div class="text-center">
                            <img src="img/5.jpg" class="rounded" alt="..." width="40%">
                        </div>
                        <!-- <img src="1.jpg" width="40%"> -->
                        <div class=" card-body">

                            <h5 class="card-title text-center" style="color: #052c65">
                                <a class="nav-link" href='<?php echo $data["link"]; ?>'>
                                    <?php echo $data["judul_buku"]; ?>
                                </a>
                            </h5>
                            <p class="card-text text-center">
                                <?php echo $data["deskripsi"]; ?>
                            </p>

                        </div>
                    </div>
                </div>

                <?php
                }
                ?>

                <?php
                include "koneksi.php";
                $sql = "SELECT * FROM `koleksi_buku` WHERE id_buku=6";
                $hasil = mysqli_query($kon, $sql);
                $no = 0;
                while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
                ?>

                <div class="col">
                    <div class="card">
                        <div class="text-center">
                            <img src="img/6.jpg" class="rounded" alt="..." width="40%">
                        </div>
                        <!-- <img src="1.jpg" width="40%"> -->
                        <div class=" card-body">

                            <h5 class="card-title text-center" style="color: #052c65">
                                <a class="nav-link" href='<?php echo $data["link"]; ?>'>
                                    <?php echo $data["judul_buku"]; ?>
                                </a>
                            </h5>
                            <p class="card-text text-center">
                                <?php echo $data["deskripsi"]; ?>
                            </p>

                        </div>
                    </div>
                </div>

                <?php
                }
                ?>


                <!-- Optional JavaScript; choose one of the two! -->

                <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                    crossorigin="anonymous"></script>

                <!-- Option 2: Separate Popper and Bootstrap JS -->
                <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>