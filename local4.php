<?php
require_once ('config4.php'); // For storing username and password.

session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <title>Hacker Test-1</title>
</head>
<body>
<h1 class="Head-title">Test your hacking skills</h1>

<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Level 4</h2>
        <label for="inputUsername" class="sr-only">Username</label> <!-- Base64-R2FtZXJsaWZl -->
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label> <!-- Base64-ZmluYWw= -->
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
         </div>
        <button name="Submit" value="Login" class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>

        <?php

        /* Check if login form has been submitted */
        if(isset($_POST['Submit'])){

            // Rudimentary hash check
            $result = password_verify($_POST['Password'], $Password);

            /* Check if form's username and password matches */
            if( ($_POST['Username'] == $Username) && ($result === true) ) {

                /* Success: Set session variables and redirect to protected page */
                $_SESSION['Username'] = $Username;

                $_SESSION['Active'] = true;
                header("location:finalindex.php");
                exit;

            } else {
                ?>
                <!-- Show an error alert -->
                &nbsp;
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Warning!</strong> Incorrect information.
                </div>
                <?php
            }
        }
        ?>

    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
