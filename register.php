<?php require('includes/connection.php');?>
<?php require('includes/registerationScript.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="blog.css">
</head>

<body>

    <?php include 'components/header.php';?>

    <div class="container">

        <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">
           
           
           <?php 
            if($msg)
            {  echo '<p class="text-dark  text-center">'. $msg . '</p>'; }
            else { echo '<p class="text-danger text-center">'. $error . '</p>'; }
            ?>

            <hr width='50'>
                <form class="needs-validation mt-5" METHOD="POST" action="register.php" novalidate>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Name</label>
                            <input type="text" class="form-control" name="name" id="validationCustom01" required>
                            <div class="invalid-feedback">
                                    Please enter your name.
                                </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <label for="validationCustomUsername">email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                </div>
                                <input type="email" class="form-control"  name="email" id="validationCustomUsername"
                                    aria-describedby="inputGroupPrepend" required>
                                <div class="valid-feedback">
                                         Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter an email.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">password</label>
                            <input type="password" class="form-control" id="validationCustom02" name="password" required>
                            <div class="invalid-feedback">
                                    Please enter a password.
                                </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>  
                    <button class="btn btn-primary" name="register" type="submit">Submit form</button>
                </form>
            </div>
        <div class="col-md-2"></div>
        </div>
    </div>



    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>