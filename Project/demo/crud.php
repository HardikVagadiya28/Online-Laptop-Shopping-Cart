<?php 

   $conn = mysqli_connect("localhost","root","","test") or die("connection error");
   $sql = "SELECT * FROM admins";
   $result= mysqli_query($conn,$sql) or die("error occur");

   if(mysqli_num_rows($result) >0){

    ?>
    <table style="border: 1px;">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>mobile No</th>
        </thead>
        <tbody>
            <?php

    while($row=mysqli_fetch_assoc($result)){

        ?>
        <tr>
            <td><?php echo $row['id'] ?> </td>
            <td><?php echo $row['Aname'] ?> </td>
            <td><?php echo $row['Aemail'] ?> </td>
            <td><?php echo $row['Amobile'] ?> </td>

        </tr>
        <?php 
    }

   }

   ?>

    </table>


