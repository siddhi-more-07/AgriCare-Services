<?php
include("connection.php");
// Check if the form is submitted
if (isset($_POST["postservicebtn"])) {
    // Retrieve form data
    $service = $_POST['service'];
    $title = $_POST['sevice-name'];
    $quantity = $_POST['quantity'];
    $service_type = $_POST['service-type'];
    $rate = $_POST['rate'];
    $location = $_POST['location'];
    $email = $_POST['serviceprovideremail'];

    $service_picture = $_FILES['service-img']['name'];
    $service_picture_tmpname = $_FILES['service-img']['tmp_name']; // corrected

    // Specify folder path for uploaded images
    $servicepicturefolder = "uploaded_service_images/" . $service_picture; // corrected
    // Move uploaded file to specified folder
    if(move_uploaded_file($service_picture_tmpname, $servicepicturefolder))
    {
        $stmt = $conn->prepare("INSERT INTO posted_services (service, service_picture, title, quantity, service_type, rate, location, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssisdss", $service, $service_picture, $title, $quantity, $service_type, $rate, $location, $email);

        if ($stmt->execute() === TRUE) {
            echo "<script>alert('successful');</script>";
            // Redirect to service-confirm.html after successful insertion
            header("Location: service-confirm.html");
            exit();
        } else {
            echo "<script>alert('Error :(\nTry again! ');</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/postservice.css">
    <title>Post My Service</title>
</head>
<body>
    <form action="Post-service.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <h1>Post your Service</h1>
            <div class="form-body">
                <div class="radiobtns">
                    <div class="grp1">
                        <input type="radio" name="service" id="Crops" class="grp1" value="Crops">
                        <label for="Crops" class="label">Crops</label>
                    </div>
                    <div class="grp2">
                        <input type="radio" name="service" id="Fertilizers" class="grp2" value="Fertilizers">
                        <label for="Fertilizers" class="label">Fertilizers</label>
                    </div>
                    <div class="grp3">
                        <input type="radio" name="service" id="Machinery" class="grp3" value="Machinery">
                        <label for="Machinery" class="label">Machinery</label>
                    </div>
                </div>

                <label for="posted-service-img">Service Picture</label>
                <input type="file" name="service-img" id="service-img">
                
                <input type="text" name="sevice-name" id="sevice-name" placeholder="Title">

                <input type="text" id="quantity" name="quantity" required placeholder="Quantity">

                <div class="radiobtns">
                    <div class="grp1">
                        <input type="radio" name="service-type" id="sell" class="grp1" value="Sell">
                        <label for="Crops" class="label">Sell</label>
                    </div>
                    <div class="grp2">
                        <input type="radio" name="service-type" id="rent" class="grp2" value="Rent">
                        <label for="Fertilizers" class="label">Rent</label>
                    </div>
                </div>

                <input type="number" id="rate" name="rate" required placeholder="Rate">
                
                <input type="text" name="location" id="location" placeholder="Location">
                
                <input type="email" name="serviceprovideremail" id="serviceprovideremail" placeholder="your email">
                
                <input type="submit" value="Post service" name="postservicebtn" class="btn">
            </div>
                
        </div>
    </form>
</body>
</html>
