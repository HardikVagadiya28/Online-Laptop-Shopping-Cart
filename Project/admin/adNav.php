<!Doctype html>
<html>

<head>
  <title>Navigation</title>
  <style>
    #nep {
      margin-left: 35px;
      text-shadow: white;

    }

    ul li {
      margin-right: 30px;
    }
  </style>
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light  bg-dark shadow  font-weight-bold ">


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="w-3">
        <a class="navbar-brand w-3" href="addHome.php">
          <img src="..\assets\image\images (1).png" class="rounded-circle" style="width:60px" alt=" Logo" />
        </a>
      </div>
      <ul class="navbar-nav mr-auto mr-auto" id="nep">
        <li class="nav-item active">
          <a class="nav-link text-white " href="adHome.php">HOME <span class="sr-only">(current)</span></a>
        </li class="nav-item">
        <li class="nav-item dropdown show text-white ">
          <div class="dropdown">
            <a class="btn dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Catogory
            </a>

            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="adAccer.php">ACCER</a></li>
              <li><a class="dropdown-item" href="adAsus.php">ASUS</a></li>
              <li><a class="dropdown-item" href="adToshiba.php">TOSHIBA</a></li>
            </ul>
          </div>
        </li>

        
        <li class="nav-item">
          <a class="nav-link disabled text-white" href="adproduct.php">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled text-white" href="sell.php">Sell</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled text-white" href="adLogin.php">Login</a>
        </li>


      </ul>


    </div>
  </nav>
</body>

</html>