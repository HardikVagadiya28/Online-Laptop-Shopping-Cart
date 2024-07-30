

<?php 

   $conn=mysqli_connect("localhost","root","","Phppro") or die("not connected ".mysqli_error($conn));
   $sql ="select * from laptop ";
   $result = mysqli_query($conn, $sql);

?>