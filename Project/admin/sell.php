<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Styled Form</title>
  <style>
    /* Background colors */
    .bg-info {
      background-color: #17a2b8;
      /* Blueish */
    }

    /* Text colors */
    .text-white {
      color: #ffffff;
      /* White */
    }

    /* Box shadow */
    .shadow {
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      /* Dark shadow */
    }

    /* Rounded corners */
    .rounded-2 {
      border-radius: 10px;
      /* Slightly rounded */
    }

    /* Label styling */
    label {
      font-weight: bold;
      /* Bold */
      color: #333333;
      /* Dark gray */
    }

    /* Input and select styling */
    input[type="text"],
    select,
    input[type="file"],
    input[type="submit"] {
      padding: 10px;
      /* Padding */
      font-size: 16px;
      /* Medium font size */
      color: #555555;
      /* Medium gray */
      border-radius: 5px;
      /* Rounded corners */
      transition: background-color 0.3s, border-color 0.3s;
      /* Smooth transition */
    }

    /* Input and select default background */
    input[type="text"],
    select,
    input[type="file"] {
      background-color: #f5f5f5;
      /* Light gray */
      border: 1px solid #cccccc;
      /* Light gray border */
    }

    /* Select arrow */
    select {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='24' height='24'%3e%3cpath d='M7 10l5 5 5-5z'/%3e%3c/svg%3e");
      background-repeat: no-repeat;
      /* No repeat */
      background-position: right 10px center;
      /* Position */
      appearance: none;
      /* No default appearance */
      -webkit-appearance: none;
      -moz-appearance: none;
    }

    /* Submit button styling */
    input[type="submit"] {
      color: #ffffff;
      /* White text */
      background-color: #28a745;
      /* Green */
      border: none;
      /* No border */
      cursor: pointer;
      /* Pointer cursor */
    }

    input[type="submit"]:hover {
      background-color: #218838;
      /* Dark green on hover */
    }
  </style>
</head>

<body>

  <?php include 'adHeader.php' ?>
  <div>
    <form action="" method="POST" enctype="multipart/form-data" class="p-2 m-2 bg-info text-white shadow rounded-2">
      <label class="p-2 m-2 w-25">Product Type :</label>
      <select name="ptype" class="form-select" aria-label="Default select example" required>
        <option selected>Category</option>
        <option name="type1" value="ACCER">ACCER</option>
        <option name="type1" value="ASUS">ASUS</option>
        <option name="type1" value="Toshiba">Toshiba</option>
      </select>
      <br><br>
      <label class="p-2 m-2 w-25">Product Name</label>
      <input type="text" name="name" required><br><br>
      <label class="p-2 m-2 w-25">Old Price :</label>
      <input type="text" name="Oprice" required><br><br>
      <label class="p-2 m-2 w-25">New Price :</label>
      <input type="text" name="Nprice" required><br><br>
      <label class="p-2 m-2 w-25">Available :</label>
      <input type="text" name="number" required><br><br>
      <label class="p-2 m-2 w-25">Image :</label>
      <input type="file" name="image" required><br><br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </div>

</body>

</html>


<?php



if (isset($_POST['submit'])) {

  $localhost = 'localhost';
  $username = 'root';
  $password = '';
  $db = 'test';

  $conn = mysqli_connect($localhost, $username, $password, $db) or die(mysqli_connect_error());






  $type = filter_input(INPUT_POST, 'ptype', FILTER_SANITIZE_STRING);
  $name = $_POST['name'];
  $Oprice = $_POST['Oprice'];
  $Nprice = $_POST['Nprice'];
  $Availabel = $_POST['number'];
  $img_loc = $_FILES['image']['tmp_name'];
  $image = $_FILES['image']['name'];
  $img_des = "images/" . $image;



  $query = "INSERT INTO `items`(`catagory`, `Name`, `new_price`,`old_price`, `Available`, `image`) VALUES ('$type','$name','$Nprice','$Oprice','$Availabel','$img_des')";

  $res = mysqli_query($conn, $query);
  if (isset($res)) {
    move_uploaded_file($img_loc, "images/" . $image);
    echo '<script>alert("success")</script>';
    echo "$image";
  } else {
    echo "not successfull";
  }

}

?>