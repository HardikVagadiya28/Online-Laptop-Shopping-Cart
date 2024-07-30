
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
           body {
            background-color: #f8f9fa; /* Light gray background */
            padding-top: 20px;
        }

        .card {
             /* White background for card */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
            margin-bottom: 20px;
        }

        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            max-width: 60%;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            color: #007bff; /* Blue heading */
            font-size: 24px;
            margin-bottom: 20px;
        }

        .card-text {
            color: #6c757d; /* Gray text */
            margin-bottom: 20px;
        }

        .btn {
            background-color: #28a745; /* Green button background */
            color: #fff; /* White button text */
            border-color: #28a745; /* Green button border */
        }

        .btn:hover {
            background-color: #218838; /* Darker green on hover */
            border-color: #1e7e34; /* Darker green border on hover */
        }
        
    </style>
</head>
<?php include "header.php"  ?>
<body>
<?php
$conn=mysqli_connect('localhost','root','','test') or die("Connection Error..!!");
$p_id=$_GET['id'];
$sql="SELECT * FROM items WHERE `id`={$p_id}";
$result=mysqli_query($conn,$sql) or die("Query Unsuccessful");
if( mysqli_num_rows($result)> 0){
while($roww = mysqli_fetch_array($result)){
  $Pname = $roww['Name'];
  $Ptype = $roww['catagory'];
  $Nprice = $roww['new_price'];
  $Oprice = $roww['old_price'];
  $Pavailable=$roww['Available'];
  $Pimage = $roww['image'];

?>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <img src="..\admin\<?php echo $Pimage; ?>" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h2 class="card-title"><?php echo "$Ptype"; ?></h2>
                    <p class="card-text">The <?php echo "$Ptype"; ?> laptop is of very high quality and has received the highest reviews from customers. It is very user-friendly and comfortable to use. Its key features include an Intel Core <?php echo "$Pname"; ?> processor and it is currently <?php echo "$Pavailable"; ?> available. Don't miss the chance to own this excellent product!</p>
                    <p class="card-text"><strong>Price: $<?php echo "$Nprice"; ?></strong></p>
                    <button class="btn btn-lg">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php }
}
?>