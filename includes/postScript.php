<?php
require('profile.php');

if(isset($_POST["submitPost"]))
{


// Accepts form input
$title = mysqli_escape_string($con, $_POST['title']);
$body = mysqli_escape_string($con, $_POST['body']);
$date = date("Y-m-d H:i:s");

// Insert the post into database
$sql = "INSERT INTO `posts`(`title`,`body`, `created_at`, `users_id`) 
             VALUES ('$title', '$body', '$date', $id)";
    
    $query = mysqli_query($con, $sql);
var_dump($query);
   if($query)
    {
        // $msg= "POST CREATED SUCCESSFULLY";
        header('location:../admin.php');
    } else {
        $error=  "Fail to insert" .mysqli_error($con);
    }

}

?>