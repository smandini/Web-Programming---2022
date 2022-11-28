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

  <title>iLectrical</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light justify-content-center text-primary">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#">iLectrical</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="about-me.php">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid p-3">
    <div class="row">
      <div class="col-6 position-relative">
        <div class="position-absolute top-50 start-50 translate-middle">
          <h1 class="display-1" style="color: #052c65; font-family: Broadway;">iLectrical</h1>
          <p class="h3">Reading Book</p>
          Selamat datang di Perpustakaan Mahasiswa Teknik Elektro Universitas Mulawarman
          <br>
          <br>
          <button onclick="document.location='book.php'" class="btn btn-outline-primary">Welcome</button>

        </div>

      </div>
      <div class="col-6">
        <div class="cover">
          <br>
          <img src=" bookcover.png" width="100%">
        </div>
      </div>

    </div>

    <div class="row p-3">
      <div class="col">
        <div class="header text-center p-5" style="color: #052c65; font-family: Broadway;">
          </br>
          <h2>Our Faculty</h2>
        </div><!-- end header-->
      </div>
    </div>

    <div class="row">
      <div class="col-6">
        <div class="cover">
          <br>
          <img src="east.png" width="115%">
        </div>
      </div>
      <div class="col-6">
        <div class="position-absolute top-50 start-50 translate-middle">
        </div>
        <div class="row m-5">
          <h3>Whare is Our Faculty ?</h3>
          <p>
            </br>
            Our faculty is part of Mulawarman University. The Universitas Mulawarman is a public university
            located in Samarinda, East Kalimantan, Indonesia. It was established on September 27, 1962,
            making it the oldest tertiary education institution in East Kalimantan.
            Faculty of Engineering at Mulawarman University located in Gunung Kalua and it has theme as
            'Tropical Engineering'.
        </div>


      </div>
      <!--end container-->
    </div>


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
