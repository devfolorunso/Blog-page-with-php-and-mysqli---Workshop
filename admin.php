<?php include 'includes/connection.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>

<body>
    <?php include 'components/header.php'; ?>


    <!-- CREATE POST -->
    <div class="container-fluid">

        <form class="needs-validation mt-5" METHOD="POST" action="includes/postScript.php" novalidate>
            <div class="form-row">

                <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">Title</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" name="title" id="validationCustomUsername"
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
                    <input type="text" class="form-control" id="validationCustom02" name="body" required>
                    <div class="invalid-feedback">
                        Please enter post content.
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" name="submitPost" type="submit">Submit form</button>
        </form>
    </div>


    <!-- SHOW POSTS -->
    <table class="table table-dark">
        
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
    
    
    
        <tbody>

            <?php 
            $sql = "SELECT * from posts";
            $query = mysqli_query($con, $sql);

                // if(Count($row) > 0)
                // {
                    while($row = mysqli_fetch_array($query))
                    {
                        ?>
                        

                        <tr>
                            <td> 
                                <?php echo $row['title']?>
                            </td>
                        
                    
                            <td> 
                              <a href="includes/deleteScript.php?id='<?php echo $row['id'];?>'">
                                      <button type="button" class="btn btn-danger" >Del</button>
                              </a>
                            </td>


                            <td> 
                              <a href="includes/editPost.php?id='<?php echo $row['id'];?>'">
                                      <button type="button" class="btn btn-success" >Edit</button>
                              </a>
                            </td>
                            
                        </tr>

                        <?php 
                    }
                // }else{
                //     echo "The post table is empty";
                // }
            ?>

        </tbody>
    </table>

</body>

</html>