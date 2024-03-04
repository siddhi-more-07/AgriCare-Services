<?php
    include_once("connection.php");

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST["login"]))
        {
            //retrieve data from form
            $logname = $_POST["login-email"];
            $logpasswod = $_POST["login-pass"];

            //select data from database
            $query = "SELECT * FROM user WHERE email='$logname' ";
            $exec = mysqli_query($conn, $query);

            //fetch row from selected data
            $row = mysqli_fetch_assoc($exec);
            
            //check for username password match
            if(mysqli_num_rows($exec) > 0)
            {
                if($logname == $row['email'] && $logpasswod == $row['password'])
                {
                    echo"<script>alert('Login Successful :)');</script>";
                    header("Location: home_page.php");
                }
                else
                {
                    echo"<script>alert('Incorrect password :(');</script>";
                    // header("Location: index.html");
                }
            }
            else
            {
                echo"<script>alert('register before login');</script>";
            }
        }
    }
?>