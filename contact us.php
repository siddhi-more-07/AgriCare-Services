<?php
    include('connection.php');
    if(isset($_POST["submit"]))
    {
        $email = $_POST["email"];
        $user = $_POST["user"];
        $message = $_POST["message"];

        $query = "INSERT INTO admin_contact (email, user_type, message) VALUES ('$email', '$user', '$message')";
        $exec = mysqli_query($conn, $query);
        if($exec)
        {
            header("Location: contact-msg.php");
            echo "<script>alert('mesage sent successfully');</script>";
        }
        else
        {
            echo "<script>alert('mesage not sent');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reach out to us!</title>
    <link rel="stylesheet" href="styles/contact.css">
</head>
<body>
    <?php
        include("includes/Header.html");
    ?>
    <div class="container">
    <div class="blurrdiv">
        <form action="" method="post">
            <div class="form">
                <h1>Reach out to Us</h1>
                <input type="email" name="email" id="email" autocomplete="off" placeholder="Username" class="username" required>
                <select name="user" id="user" class="type" required>
                    <option value="buyer">I'm Buyer</option>
                    <option value="seller">I'm Seller</option>
                </select>
                <textarea name="message" id="message" class="message" required></textarea>
                <input type="submit" value="Send Message" class="btn" name="submit">
            </div>
        </form>
    </div>
    </div>
    <?php
        include("includes/Footer.html");
    ?>
</body>
</html>