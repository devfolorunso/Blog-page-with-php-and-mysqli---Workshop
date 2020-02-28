<?php
$servername ='localhost';
$username ='root';
$password ='';
$db_Name = 'blog';

//Connect to the database
$con = mysqli_connect($servername , $username, $password, $db_Name);

if(!$con){
    echo 'Error'.mysqli_connect_error();
}else{
    echo 'connection successful!';
}

?>