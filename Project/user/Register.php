<?php



if (isset($_POST['submit'])) {

    $name = $_POST['sname'];
    $smobile = $_POST['smobile'];
    $semail =$_POST['semail'];
    $spassword = $_POST['spassword'];

    $conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Error..!!");
    $sql = "insert into  users(sname,smobile,semail,spassword) values('$name','$smobile','$semail','$spassword')";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
    header("location:login.php");
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
<body id="flog" >

    <div id="fdlog" class="container mt-4 w-25" >
    <form action="" method="post"    id="log">
        <a class="navbar-brand w-3" href="#">
            <img src="../assets/image/images (1).png" class="rounded-circle"style="width:50px" alt=" Logo"/>
          </a>
        <h1 > Sign up</h1>
        <Label class="w-25">User Name:</Label>
        <input type="text" placeholder="Enter Name ..." name="sname" required>
        <br>
        <Label class="w-25">Mobile No:</Label>
        <input type="text" id="tlog" placeholder="Enter Mobile Number ..." name="smobile" required>
        <br>
        <Label class="w-25">Email:</Label>
        <input type="text" placeholder="Enter Email ..." name="semail" required>
        <br>
        
        <label for="Password" class="w-25">Password :</label>
        <input type="password" placeholder="Enter Password ...." name="spassword" required>
        <br>
        
        
        <input type="submit" name="submit" class="btn btn-outline-success">
        <a href="#" >forget password ..</a>
        <a href="login.php" class="btn btn-outline-primary" >Login</a>

    </form>
</div>
    
</body>
<div class="fixed-bottom bg-dark">
<?php include 'footer.php' ?>
</div>
</html>