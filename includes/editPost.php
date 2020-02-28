<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>


     <!-- EDIT POST -->     
<?php 
include '../components/header.php';


$id = $_GET['id'];

//Fetch full post info from Posts table
$sql = "SELECT * from `posts` where `id` = $id";
$query = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($query))
{?>

<div class="container-fluid">
<form class="needs-validation mt-5" METHOD="POST"  novalidate>

        <div class="col-md-4 mb-3">
            <label for="validationCustomUsername">Title</label>
            <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control" name="title" value=<?php echo $row['title'];?> id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please enter a post title.
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Body</label>
            <textarea class="form-control" name="body"> <?php echo $row['body'];?></textarea>
        </div>
    <button class="btn btn-primary" name="editPost" type="submit">Submit form</button>
</form>
</div>


<?php } 
/**
 * Edit Script
 * This updates the posts table using the current id
 * */

if(isset($_POST["editPost"]))
{
    // Accepts form input
    $title = mysqli_escape_string($con, $_POST['title']);
    $body = mysqli_escape_string($con, $_POST['body']);
    $date = date("Y-m-d H:i:s");


    $sql = "UPDATE `posts`  
            SET title = '$title', body = '$body', created_at= '$date' WHERE  `id` = $id";

    if(mysqli_query($con, $sql))
    {
        header('location:../admin.php');

    } else
    {
        echo "Could not update post".mysqli_error($con);
    }

}
?>


</body>
</html>