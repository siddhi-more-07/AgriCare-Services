<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['productName'];
    $quantity = $_POST['quantity'];
    $productType = $_POST['option'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contactNumber'];
    $address = $_POST['address'];
    $description = $_POST['Description'];

    $query = "INSERT INTO sold_products (product_name, quantity, product_type, email, contact_number, address, description) 
              VALUES ('$productName', $quantity, '$productType', '$email', '$contactNumber', '$address', '$description')";


    $exec = mysqli_query($conn, $query);

    if ($exec) {
        header("Location: sell-confirm.php");
        exit();
    } else {
        echo "<script>alert('Some Problem occured\nTry agrin!');<script>";
    }
}
?>

<?php
if (isset($_POST["confirmorderbtn"])) {
    header("Location: sell-confirm.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/confirm-myorder.css">
    <title>Sell my product</title>
</head>

<body>
    <form action="#" method="POST" id="myForm">
        <div class="container">
            <h1>Sell my product</h1>
            <div class="form-group">
                <label for="productName">Product Name:</label>
                <input type="text" id="productName" name="productName" placeholder="Product name" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" required>
            </div>
            <fieldset>
                <legend><label for="crops" class="radiolabel">Crops</label>
                <input type="radio" id="crops" name="option" value="crops">
                </legend>
            </fieldset>
            <fieldset>
                <legend><label for="fertilizer" class="radiolabel">Fertilizer:</label>
                <input type="radio" id="fertilizer" name="option" value="fertilizer">
                </legend>
            </fieldset>
            <fieldset>
                <legend><label for="machinery" class="radiolabel">Machinery:</label>
                <input type="radio" id="machinery" name="option" value="machinery">
                </legend>
            </fieldset>
            <div class="form-group">
                <label for="email" class="emaillabel">Email:</label>
                <input type="text" id="email" name="email" required placeholder="email">
            </div>
            <div class="form-group">
                <label for="contactNumber">Contact Number:</label>
                <input type="text" id="contactNumber" name="contactNumber" required placeholder="contact no.">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" required placeholder="address"></textarea>
            </div>
            <div class="form-group">
                <label for="desc">Description:</label>
                <textarea id="description" name="Description" required placeholder="Description"></textarea>
            </div>

            <input type="submit" value="Sell my product" name="confirmorderbtn">
        </div>
    </form>
</body>

</html>