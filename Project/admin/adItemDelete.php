<?php 

  
$conn=mysqli_connect('localhost','root','','test') or die("Connection Error..!!");
$p_id=$_GET['id'];
$sql="DELETE FROM items WHERE id={$p_id}";
$result=mysqli_query($conn,$sql) or die("Query Unsuccessful");
 if(isset($result)){ ?>
  <script>alert(" Product successful Deleted!"); window.location.href = "adHome.php";</script>
 <?php
 //header("Location: adHome.php");
 }
?>