<?php



if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Error..!!");

    $sql = "SELECT * FROM users WHERE sname = '$name' AND spassword = '$password' ";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    if (mysqli_num_rows($result) > 0) {

        //header('location: index.php');

        ?>
        <script>alert(" User page Registration successful!"); window.location.href = "index.php";</script>

        <?php

    }

}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="../assets/total.css" rel="stylesheet">

</head>
<?php include 'header.php' ?>

<body id="flog" class="align-center">

    <div id="fdlog" class="container mt-4 w-25">
        <form action="" method="post" id="log">
            <a class="navbar-brand w-3" href="#">
                <img src="../assets\image\images (1).png" class="rounded-circle" style="width:50px" alt=" Logo" />
            </a>
            <h1> Login</h1>
            <Label class="w-25">User Name:</Label>
            <input type="text" placeholder="Enter Name ..." name="name" required>
            <br>
            <label for="Password" class="w-25">Password :</label>
            <input type="password" placeholder="Enter Password ...." name="password" required>
            <br>

            <input type="submit" name="submit" class="btn btn-outline-success">
            <a href="#">forget password ..</a>
            <button class="btn btn-outline-primary">Sign up</button>

        </form>
    </div>

</body>
<div class="fixed-bottom bg-dark">
    <?php include 'footer.php' ?>

</div>

</html>