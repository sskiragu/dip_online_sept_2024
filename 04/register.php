<?php
// set error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// connect to the database
$connect = mysqli_connect("localhost", "root", "", "myapp");

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// var_dump($connect);

echo "<br>";

// var_dump($_POST);

//get the form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// echo "Username: $username<br>";
// echo "Email: $email<br>";
// echo "Password: $password<br>";

$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
$result = mysqli_query($connect, $sql);

// Check if the query was successful
if ($result) {
    echo "User registered successfully!";
} else {
    echo "Error: " . mysqli_error($connect);
}
?>