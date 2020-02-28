<?php 
include 'connection.php';


//Delete a post with id of $id
$id = $_GET['id'];
$sql = "DELETE FROM `posts` WHERE `id` = $id";
    if(mysqli_query($con, $sql))
    {
        header('location:../admin.php');
    }else{
        echo "Could not delete the post".mysql_error($con);

    }
