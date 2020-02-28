<?php
require('connection.php');
session_start();

if(isset($_POST["login"]))
{

    // Accepts form input
    $email = mysqli_escape_string($con, $_POST['email']);
    $password = mysqli_escape_string($con, $_POST['password']);



    // Checks the database for the user
    $sql = "SELECT *  FROM `users` WHERE `email` = '$email'";
    $query = mysqli_query($con, $sql);
    $num_rows = mysqli_num_rows($query);

    if($num_rows === 1)
     {

     while($row = mysqli_fetch_array($query))
     {

        /**
         * Verify the password that the user has entered
         */
         if(password_verify($password,$row['password']))
             {
                

                // Declare a session variable and set the fetched email into it.
                $_SESSION["profile"] = $row['email'];

            }
            else
            {
                header('location:../login.php');
            }
        }

    }

}
?>