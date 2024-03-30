<?php
include('connection.php');
?>
<?php
    $updatedusername = "username";
    $updatedbio = "bio here";
    $profile_picture_data = "";
    $submittedemail = "";
    //Creting user proifile
    if(isset($_POST["submitemail"]))
    {
        $submittedemail = $_POST["username"];
        $query = "SELECT * FROM user_profile WHERE email = '$submittedemail'";
        $exec = mysqli_query($conn, $query);
        if ($exec->num_rows > 0) 
        {
            $row = $exec->fetch_assoc();
            $updatedusername = $row["username"];
            $updatedbio = $row["bio"];
            $profile_picture_data = $row["profile_picture"];
        } 
        else 
        {
        $updatedusername = "username";
        $updatedbio = "bio here";
        }
    }
?>
<?php
    if (isset($_POST["update"])) {
        $updatedusername = $_POST["profile-username-update"];
        $updatedbio = $_POST["profile-bio-update"];
        $updateemail = $_POST["updateprofileemail"];
        $profile_picture_data = $_FILES["profile-pic-udpate"]["name"];
        $updatedpictmpname = $_FILES["profile-pic-udpate"]["tmp_name"];
        $folder = "uploaded-profile-pictures/" . $profile_picture_data;
    
        if (move_uploaded_file($updatedpictmpname, $folder)) {
            $stmt = $conn->prepare("INSERT INTO user_profile (profile_picture, username, bio, email) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $profile_picture_data, $updatedusername, $updatedbio, $updateemail);
    
            if ($stmt->execute()) {
                // Update the profile data after successful insertion
                $query = "SELECT * FROM user_profile WHERE email = '$updateemail' ORDER BY id DESC LIMIT 1";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $updatedusername = $row["username"];
                    $updatedbio = $row["bio"];
                    $profile_picture_data = $row["profile_picture"];  
                }
            } else {
                echo "<script>alert('Update failed, please try again.');</script>";
            }
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>My profile</title>
    <link rel="icon" href="images/user.png">

</head>

<body>
    <?php
    include("includes/Header.html");
    ?>

    <form action="user-profile.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="box">
                <div class="section1">


                    <div class="profile-pic"><img
                            src="uploaded-profile-pictures/<?php echo "$profile_picture_data"; ?>" /></div>

                    <div class="profileinfo">
                        <div class="profile-name">
                            <h1 id="profile-name">
                                <?php echo $updatedusername; ?>
                            </h1>
                            <i class="fa-solid fa-bars" id="menu-icon"></i>
                            <div class="menubox">
                                <ul>
                                    <li class="listitem"><button id="editProfileLink" onclick="editProfileLink()">Edit
                                            Profile </button><i class="fa-regular fa-pen-to-square"></i></li>
                                    <li class="listitem"><a href="check-history.php" target="_blank"
                                            id="checkProfilehistory">Check history </a><i
                                            class="fa-regular fa-pen-to-square"></i></li>
                                    <li class="listitem"><a href="Post-service.php" target="_blank"
                                            id="postprofileservice">Post Service </a><i
                                            class="fa-regular fa-pen-to-square"></i></li>
                                    <li class="listitem"><a href="check-Posted-services.php" target="_blank"
                                            id="checkpostedservice">check Posted Service </a><i
                                            class="fa-regular fa-pen-to-square"></i></li>
                                    <li class="listitem"><a href="check-booked-services.php" target="_blank"
                                            id="checkbookedservice">check Booked Service </a><i
                                            class="fa-regular fa-pen-to-square"></i></li>
                                    <li class="listitem"><a href="check-sold-services.php" target="_blank"
                                            id="checksoldservice">check Sold Service </a><i
                                            class="fa-regular fa-pen-to-square"></i></li>
                                    <li class="listitem"><a href="logout.php">Logout </a><i
                                            class="fa-regular fa-pen-to-square"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="bio">
                            <p id="profile-bio">
                                <?php echo $updatedbio; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- edit profile form section -->
                <div class="edit-profile-form-section" id="edit-profile-form-section">
                    <div class="edit-form" id="edit-form">
                        <i class="fa-solid fa-xmark" id="update-form-close"></i>

                        <p>Update Picture</p>
                        <input type="file" name="profile-pic-udpate" id="profile-pic-udpate" accept=".png, .jpg, .jpeg">

                        <p>Update Username</p>
                        <input type="text" name="profile-username-update" id="profile-username-update"
                            placeholder="username">

                        <p>Update Bio</p>
                        <textarea name="profile-bio-update" id="profile-bio-update" cols="40" rows="8"
                            placeholder="write your info here..."></textarea>

                        <p>Your email</p>
                        <input type="email" name="updateprofileemail" id="updateprofileemail" placeholder="email">

                        <input type="submit" value="Update" name="update" id="update">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php
    include("includes/Footer.html");
    ?>

    <script src="script/script.js"></script>
</body>

</html>