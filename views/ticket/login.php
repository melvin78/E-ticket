<?php

session_start();




?>

<!DOCTYPE html>
<html>
<head>
    <title>


        New USER
    </title>


    <!--suppress JSUnresolvedLibraryURL -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--suppress JSUnresolvedLibraryURL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>


    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <script src="../../js/login.js"></script>

    <style type="text/css">

        .card {
            box-shadow: 0 0 10px 0 rgba(100, 100, 100, 0.26);
        }

    </style>

</head>


<body>


<br>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6" id="alert-login-parent" >
        <div id="alert-login">

        </div>

    </div>
    <div class="col-md-3"></div>
</div>
<div class="row">
    <div class="col-md-3"></div>

    <div class="col-md-6 card shadow  " id="login-form-div">
        <input type="hidden" value="<?php
        if(!isset($_SESSION['logged_in'])){
            echo false;
        }
        else{
            echo  $_SESSION['logged_in'];
        }

        ?>" id="logged-status">

        <div class="pt-3 pb-3">



            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Email Address" required>
                <div class="invalid-feedback email-validation">
                    Please provide a valid email address.
                </div>
            </div>


            <div class="form-group ">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="password" required>
                <div class="invalid-feedback password-validation">
                    Please provide a password.
                </div>
            </div>



            <button id="login-me" class="btn btn-primary ">LOGIN</button>
<div class="card-footer"><a href="register.php">Dont have an account register here</a> </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>

</body>
</html>
<script>

</script>


