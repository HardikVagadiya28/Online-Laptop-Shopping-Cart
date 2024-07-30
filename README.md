# Online-Laptop-Shopping-Cart

This is an online shopping cart application for laptops, developed using HTML, CSS, PHP, and MySQL. It allows users to browse, select, and purchase laptops through a user-friendly interface.

Features:

Product Listings: Browse a variety of laptops with detailed specifications and prices.
Shopping Cart: Add, remove, and update quantities of laptops in the shopping cart.
User Authentication: Register and log in to manage your shopping cart and track orders.
Order Management: Place orders and receive confirmation.
Database Integration: Store product details and user information securely in a MySQL database.
Installation and Setup
Database Configuration
Set up MySQL Database:

Create a new MySQL database:

Import the provided SQL schema file to set up the necessary tables.
Configure Database Connection:

Update the config.php file with your database credentials:

<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

Server Setup:
Ensure you have a local or remote web server with PHP support (e.g., XAMPP).

Deploy Files:
Upload the project files to your server's root directory.
