<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/total.css" rel="stylesheet">
    <style>
        .error-message {
            color: red;
            font-size: 14px;
        }

        .container {
            width: 500px;
        }
    </style>
</head>

<body id="flog">
    <div id="fdlog" class="container mt-4 w-25">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="log">
            <a class="navbar-brand w-3" href="#">
                <img src="../assets/image/images (1).png" class="rounded-circle" style="width:50px" alt=" Logo" />
            </a>
            <h1> Sign up</h1>
            <div class="form-group">
                <label class="w-25">Admin Name:</label>
                <input type="text" name="AName" class="form-control"
                    value="<?php if (isset($_POST['AName']))
                        echo htmlspecialchars($_POST['AName']); ?>">

            </div>
            <div class="form-group">
                <label class="w-25">Admin email:</label>
                <input type="text" placeholder="Enter Email ..." name="AEmail" class="form-control"
                    value="<?php if (isset($_POST['AEmail']))
                        echo htmlspecialchars($_POST['AEmail']); ?>">

            </div>
            <div class="form-group">
                <label class="w-25">Mobile:</label>
                <input type="text" id="tlog" placeholder="Enter Mobile ..." name="AMobile" class="form-control"
                    value="<?php if (isset($_POST['AMobile']))
                        echo htmlspecialchars($_POST['AMobile']); ?>">

            </div>
            <div class="form-group">
                <label for="Password" class="w-25">Password:</label>
                <input type="password" placeholder="Enter Password ...." name="APassword" class="form-control">

            </div>
            <input type="submit" name="submit" class="btn btn-outline-success">
            <a href="adLogin.php" class="btn btn-outline-primary ml-4">Admin Login</a>
        </form>
    </div>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $EErr = $NErr = $MErr = $PErr = '';

    if (empty($_POST["AName"])) {
        $NErr = "Name is required";
    } else {
        $name = $_POST["AName"];
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $NErr = "Only letters and white space allowed for name";
        }
    }

    if (empty($_POST['AEmail'])) {
        $EErr = "Email is required";
    } else {
        $email = $_POST["AEmail"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $EErr = "Invalid email format";
        }
    }

    if (empty($_POST["AMobile"])) {
        $MErr = "Mobile number is required";
    } else {
        $mobile = $_POST["AMobile"];
        if (!preg_match("/^(8)[0-9]{9}$/", $mobile)) {
            $MErr = "Invalid mobile number";
        }
    }

    if (empty($_POST["APassword"])) {
        $PErr = "Password is required";
    } else {
        $password = $_POST["APassword"];
        if (!preg_match("/^[a-zA-Z]{4,10}$/", $password)) {
            $PErr = "Enter a password between 4 to 10 characters";
        }
        ?>

        </div>
        <?php

    }
}

?>
<br>
<div class="container">
    <?php
    // Define an array to hold all error messages
    $errorMessages = array(
        $NErr ?? '',
        $EErr ?? '',
        $MErr ?? '',
        $PErr ?? ''
    );

    // Iterate through the array and display each error message
    foreach ($errorMessages as $error) {
        if (!empty($error)) {
            echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
        }
    }
    ?>