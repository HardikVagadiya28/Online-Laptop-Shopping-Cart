<!DOCTYPE html>
<html lang="en">

<head>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">


  <title>Sixteen Clothing HTML Template</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="../assets/total.css" rel="stylesheet">
  <!-- <link href="assets/total.css" rel="stylesheet"> -->


</head>



<body>

  <?php include 'header.php' ?>


  <section style="background-color: #eee;">
  <center class="text-info h3 mt-4">Toshiba laptops</center>
    <div class="container py-5">
      <div class="row">
        <?php $localhost = 'localhost';
        $username = 'root';
        $password = '';
        $db = 'test';
        $n = 0;

        $conn = mysqli_connect($localhost, $username, $password, $db) or die (mysqli_connect_error());

        $uplod = mysqli_query($conn, "SELECT * FROM `items` where `catagory` ='Toshiba'  ");

        while ($row = mysqli_fetch_array($uplod)) {




          if ($n < 3) {

            ?>
            <?php include ('products.php'); ?>
          <?php }
        }
        ?>


      </div>
    </div>
  </section>