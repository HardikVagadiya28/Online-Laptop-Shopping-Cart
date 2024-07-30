<?php 


   


   $conn = mysqli_connect("localhost","root","","test") or die("connection error");
   $sql="DELETE FROM admins WHERE id='6' ";
   $result=mysqli_query($conn,$sql) or die("Query Unsuccessfull");
   if(isset($result)){
    echo "successfull";
   }




?>