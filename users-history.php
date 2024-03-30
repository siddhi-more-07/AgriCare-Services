<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile History</title>
    <style>
        body {
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
        }
        h1{
            text-align: center;
            font-family: sans-serif;
            font-size: 40px;
            text-decoration: underline;
        }
        .history-table {
            width: 60%;
            margin: 20px auto;
            background-color: white;
            font: 1.20em sans-serif;
            justify-content: center;
            align-items: center;
            border-collapse: collapse;
        }
        .history-table th, .history-table td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: center;
        }
        .history-table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Profile History</h1>
    <?php
    // Include the database connection file
    include('connection.php');

    // Check if email is submitted
    if(isset($_POST["submit"])) {
        $submittedEmail = $_POST["username"];

        // Fetch user's profile history based on the submitted email
        $query = "SELECT * FROM user_profile WHERE email = '$submittedEmail'";
        $result = $conn->query($query);

        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Output the history table
            echo "<table class='history-table'>";
            echo "<tr><th>Profile Picture</th><th>Username</th><th>Bio</th></tr>";

            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td><img src='uploaded-profile-pictures/" . $row["profile_picture"] . "' width='100'></td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["bio"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<script>alert('No history to display.');</script>";
        }
    } else {
        echo "<script>alert('No email submitted.');</script>";
    }
    ?>
</body>
</html>
