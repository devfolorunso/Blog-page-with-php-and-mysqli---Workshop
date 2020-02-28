<?php 
include('loginScript.php');
$email = $_SESSION['profile'];

//Fetch the user's profile
$profileSQL = "SELECT *  FROM `users` WHERE `email` = '$email'";
$profileQUERY = mysqli_query($con, $profileSQL);
    
     while($row = mysqli_fetch_array($profileQUERY))
     {
        $id = $row['id'];
        $role = $row['role_id'];
        $name = $row['name'];
    }
?>