<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recently Posted Services</title>

    <style>
        /* Your CSS styles */
        .section-headings {
            margin-top: 2rem;
            margin-bottom: 1rem;
            text-align: center;
            text-decoration: underline;
            font-family: sans-serif;
        }

        .section-headings {
            width: 100%;
        }

        .section1 {
            height: max-content;
            width: 90.30rem;
            margin: 0 2rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            background-color: rgb(247, 247, 247);
            border: 2px solid black;
        }

        .section1 .card1 {
            height: 28rem;
            width: 22rem;
            margin: 1.30rem;
            background-color: white;
            align-items: center;
            justify-content: center;
            font-family: sans-serif;
            box-shadow: rgba(67, 67, 67, 0.21) 2px 3px 12px 0px;
        }

        .card1 img {
            height: 17rem;
            width: 22rem;
        }

        .card1 h2 {
            margin: 1rem 0;
            text-align: center;
        }

        .card1 button {
            height: 2.20rem;
            width: 7rem;
            font-size: 15px;
            margin-left: 2.40rem;
            margin-top: 1.40rem;
            transition: 0.4s;
        }

        .card1 #sell1 {
            background-color: rgba(47, 255, 89, 0.532);
        }

        .card1 #buy1 {
            background-color: rgba(0, 153, 255, 0.532);
        }

        .card1 button:hover {
            cursor: pointer;
            transform: scale(1.2);
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="section-headings" id="vegetablesheading">
        <h1>Recently Posted Services</h1>
    </div>

    <?php
    // Include your database connection file here
    include("connection.php");
    // Fetch data from the posted_services table
    $query = "SELECT * FROM posted_services";
    $result = $conn->query($query);

    // Check if there are any records
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<div class='section1' id='Crops'>";
        while ($row = $result->fetch_assoc()) {
            // Extract data from the current row
            $postedpicture = $row["service_picture"];
            $title = $row["title"];

            // Echo the HTML for the card
            echo "<div class='card1'>";
            echo "<img src='uploaded_service_images/$postedpicture' alt='$title'>";
            echo "<h2>$title</h2>";
            echo "<a href = 'confirm-myorder.php'><button id='sell1' name='sellbtn'>Sell</button></a>";
            echo "<a href = 'confirm-myorder.php'><button id='buy1' name='buybtn'>Buy</button></a>";
            echo "</div>";
        }
        echo "</div>";

    } else {
        // If no services found, display a message
        echo "<h1>No services found</h1>";
    }

    // Close the database connection
    $conn->close();
    ?>

</body>
</html>
