<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="../assets/total.css" rel="stylesheet">

</head>

<body id="flog">


    <div id="fdlog" class="container mt-4  w-25">
        <form action="" method="post" id="log">
            <a class="navbar-brand w-3" href="#">
                <img src="../assets\image\images (1).png" class="rounded-circle" style="width:50px" alt=" Logo" />
            </a>
            <h1> Login</h1>
            <Label class="w-25">Admin Name:</Label>
            <input type="text" placeholder="Enter Name ..." name="Aname" required>
            <br>
            <label for="Password" class="w-25">Password :</label>
            <input type="password" placeholder="Enter Password ...." name="Apasword" required>
            <br>
            <input type="submit" name="submit" class="btn btn-outline-success">
            <a href="#">forget password ..</a>
            <a class="btn btn-outline-primary" href="adRegister.php">Sign up</a>
        </form>
    </div>
</body>
</html>
<?php

if (isset($_POST['submit'])) {

    $Aname = $_POST['Aname'];
    $Apassword = $_POST['Apassword'];


    $conn = mysqli_connect("localhost", "root", "", "test");
    $sql = "SELECT * FROM admins WHERE Aname='$Aname' AND Apassword ='$Apassword' ";
    $Result = mysqli_query($conn, $sql) or die("unsuccessfull");

    ?>
    <script>alert(" Admin page Registration successful!"); window.location.href = "adHome.php";</script>

    //header("Location:adHome.php");
    <?php
}
?>