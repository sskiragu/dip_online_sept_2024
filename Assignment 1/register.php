<?php
// connect to the database
$connect = mysqli_connect("localhost", "root", "", "myapp");

var_dump($connect);

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
?>