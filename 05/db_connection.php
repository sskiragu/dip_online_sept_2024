<?php
// connect to the database
$connect = mysqli_connect("localhost", "root", "", "myapp");

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>