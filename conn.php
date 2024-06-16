<?php

$sevrvername= "localhost";
$username= "root";
$password=" ";
$db= " consultancy";

$conn= new mysqli("localhost", "root","","consultancy");
if($conn->connect_error){
    die("Database connection failed:".$conn->connect_error);
}
echo "Hello qorld";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    // Additional fields...

    // Process the data (e.g., store it in a database)
    // ...

    // Redirect the user to a success page
    header("Location: success.html");
    exit;
}
?>
