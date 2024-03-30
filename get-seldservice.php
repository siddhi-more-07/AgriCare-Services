<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Posted Services</title>

    <style>
        h1{
            text-align: center;
            text-decoration: underline;
        }
        table {
            width: 50%;
            font-size: 20px;
            margin: 20px auto;
            font-family: sans-serif;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <div class="section-headings" id="vegetablesheading">
        <h1>Your Booked Services</h1>
    </div>

    <?php
    // Include your database connection file here
    include("connection.php");

    //get email value
    $checkforemail = $_POST["username"];
    // Fetch data from the booked_orders table
    $query = "SELECT * FROM sold_products WHERE email = '$checkforemail'";
    $result = $conn->query($query);

    // Check if there are any records
    if ($result->num_rows > 0) {
        // Output table header
        echo "<table>";
        echo "<tr><th>Product Name</th><th>Quantity</th></tr>";

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Extract data from the current row
            $productName = $row["product_name"];
            $quantity = $row["quantity"];

            // Echo table row
            echo "<tr><td>$productName</td><td>$quantity</td></tr>";
        }

        // Close the table
        echo "</table>";

    } else {
        // If no services found, display a message
        echo "<h1>No order found</h1>";
    }

    // Close the database connection
    $conn->close();
    ?>

</body>
</html>
