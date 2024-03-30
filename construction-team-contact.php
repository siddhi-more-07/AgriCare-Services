<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/construction-team-contact.css">
    <title>Book a Service</title>
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <h1>Book a Consultance</h1>
            <div class="form-body">
                <input type="text" name="sevice-username" id="sevice-username" placeholder="username/email">
                <input type="tel" name="service-mobile" id="service-mobile" placeholder="contact no">
                <label for="service-type"style="margin-bottom:1rem">Select service:</label>
                <div class="radiobtns">
                    <div class="grp1">
                        <input type="radio" name="service-type" id="farmhouse-construction" class="grp1">
                        <label for="farmhouse-construction" class="label">Farmhouse Construction</label>
                    </div>
                    <div class="grp2">
                        <input type="radio" name="service-type" id="barn-construction" class="grp2">
                        <label for="barn-construction" class="label">Barn Construction</label>
                    </div>
                    <div class="grp3">
                        <input type="radio" name="service-type" id="animal-consultant" class="grp3">
                        <label for="animal-consultant" class="label">Animals Consultance</label>
                    </div>
                    <div class="grp4">
                        <input type="radio" name="service-type" id="plant-consultant" class="grp4">
                        <label for="plant-consultant" class="label">Plants Consultance</label>
                    </div>
                </div>
                <input type="text" name="location" id="location" placeholder="Location">
                <button class="btn" name="btn"><a href="contact-msg.html">Get in Touch</a></button>
            </div>
                
        </div>
    </form>
</body>
</html>

<?php
    if(isset($_POST["btn"]))
    {
        header("Location: contact-msg.html");
        exit();
    }
?>