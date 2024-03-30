<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .order-details {
            margin-bottom: 20px;
        }

        .order-details p {
            margin: 5px 0;
            font-size: 18px;
        }

        #total-amount {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
        }

        .confirmation-message {
            font-size: 24px;
            color: #28a745;
            font-weight: bold;
        }

    </style>

</head>
<body>
    <div class="container">
        <h1>Order Confirmation</h1>
        <div class="order-details">
            <?php
            // Include your database connection file
            include "connection.php";

            // Query to fetch the latest order from booked_orders table
            $query = "SELECT product_name, quantity FROM booked_orders ORDER BY id DESC LIMIT 1";

            // Execute the query
            $result = mysqli_query($conn, $query);

            // Check if a row is returned
            if (mysqli_num_rows($result) == 1) {
                // Fetch the row
                $row = mysqli_fetch_assoc($result);
                // Display the product_name and quantity
                echo "<p>Your order for " . $row['product_name'] . " " . $row['quantity'] . "</p>";
            } else {
                echo "<p>No orders found.</p>";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>
        <p class="confirmation-message">Order Confirmed</p>
    </div>
</body>
</html>
