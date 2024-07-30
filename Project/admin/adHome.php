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

  <?php include 'adHeader.php' ?>


  <section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        <?php $localhost = 'localhost';
        $username = 'root';
        $password = '';
        $db = 'test';
        $n = 0;

        $conn = mysqli_connect($localhost, $username, $password, $db) or die (mysqli_connect_error());

        $uplod = mysqli_query($conn, "SELECT * FROM `items`");

        while ($row = mysqli_fetch_array($uplod)) {




          if ($n < 3) {

            ?>
            <?php include ('adItems.php'); ?>
          <?php }
        }
        ?>


      </div>
    </div>
  </section>