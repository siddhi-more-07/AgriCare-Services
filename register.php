<?php
    include_once('connection.php');
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST["register"]))
        {
            //fetch data from html form
            $regname = $_POST["reg-name"];
            $regemail = $_POST["reg-email"];
            $regmobile = $_POST["mobile"];
            $regusertype = $_POST["user-type"];
            $regpassword = $_POST["reg-pass"];

            //duplicate username check
            $query = "SELECT * FROM user WHERE email='$regemail' ";
            //execute query strored in $query
            $exec = mysqli_query($conn, $query);
            if(mysqli_num_rows($exec) > 0)
            {
                echo"<script>alert('Email already registered!');</script>";
            }
            else
            {
               //mobile no validation
               if(!preg_match("/^\d{10}$/", $regmobile))
               {
                    echo"<script>alert('Invalid mobile number!');</script>";
               } 
               else
               {
                    //lets insert in database
                    $query1 = "INSERT INTO user (name, email, mobile, user_type, password) VALUES ('$regname', '$regemail', '$regmobile', '$regusertype', '$regpassword')";
                    //$query2 = "INSERT INTO user_profiles (email) VALUES ('$regemail')";
                    $result = mysqli_query($conn, $query1);
                    //$result2 = mysqli_query($conn, $query2);
                    if($result)
                    {
                        echo"<script>alert('Registered sucessfully :)');</script>";
                        header("Location: home_page.php");
                    }
                    else
                    {
                        echo"<script>alert('Some error ocucured :(\n Try again!');</script>";
                    }
                }
            }
        }   
    }
?>