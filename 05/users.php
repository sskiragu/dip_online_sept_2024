<?php

//add style to the page
echo "<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
      </style>";

require_once 'db_connection.php';

//select all users and display them in a table
$sql = "SELECT * FROM users";
$result = mysqli_query($connect, $sql);
// Check if the query was successful
if ($result) {
    // Check if there are any rows returned
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th colspan='2'>Action</th>
                </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['username'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>Edit</td>
                    <td>Delete</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No users found.";
    }
} else {
    echo "Error: " . mysqli_error($connect);
}
?>