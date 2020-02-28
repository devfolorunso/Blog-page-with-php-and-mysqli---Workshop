<?php
if(isset($_POST["register"]))
{
    // $roleQuery = "SELECT *  From roles";
    // $query = mysqli_query($con, $roleQuery);
    // while($row = mysqli_fetch_array($query))
    // {

    
    // }


// Accepts form input
$fullname = mysqli_escape_string($con, $_POST['name']);
$email = mysqli_escape_string($con, $_POST['email']);
$password = mysqli_escape_string($con, $_POST['password']);
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
// $error ='';
$role = 2;

    if(!empty($_POST['register']))
    {
        $error = 'Fill all fields';
        echo $fullname;
    } else {


/**
* FIRST METHOD
* $query = mysqli_query("INSERT INTO users('name','email', 'password') 
* VALUES ($fullname, $email, $hashedPassword)",$con);
* */        


/**
 * SECOND METHOD
 *  $sql = "INSERT INTO users('name','email', 'password') 
 * VALUES ($fullname, $email, $hashedPassword)";
*  $query = mysqli_query($sql, $con);
*  if($query){
*  echo "RECORDS INSERTED SUCCESSFULLY";
*  } else {
*   echo "Fail to insert" .mysqli_error();
*  }
* */ 
    


// Insert the user's info into table users
    $sql = "INSERT INTO `users`(`name`,`email`, `password` , `role_id`) 
             VALUES ('$fullname', '$email', '$hashedPassword', $role)";

        if(mysqli_query($con, $sql))
        {
            $msg= "RECORDS INSERTED SUCCESSFULLY";
            // header(redirect('login'));
        } else {
            $error=  "Fail to insert" .mysqli_error($con);
        }

}

}
?>