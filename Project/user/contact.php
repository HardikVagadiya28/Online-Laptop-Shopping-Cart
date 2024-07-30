<?php



if (isset($_POST['submit'])) {
  
   echo "<script>alert('message has been sent succesfully')</script>";
    //header("location:index.php");
}


?>


<?php include "header.php"  ?>




<!-- contact.html -->
<!-- contact.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .contact-form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .contact-form h2 {
            color: #343a40;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control {
            border-color: #ced4da;
        }
        .btn-submit {
            background-color: #007bff;
            border: none;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="contact-form">
                    <h2>Contact Us</h2>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <input type="text" id="subject" name="subject" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
                        </div>
                        <input type="submit" class="btn btn-submit" name ='submit'>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>






<div class="fixed-bottom bg-dark">

</div>
<!-- send_email.php -->
