<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        nav li{
            display: inline;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">

       <?php
        // Include the navigation bar
        include_once 'navbar.php';
        ?>

        <!-- Main Section -->
        <h1>Welcome to the Home Page</h1>

        <!-- Footer Section -->
        <footer>
            <p>&copy; 2023 My Website</p>
        </footer>
    </div>
</body>
</html>