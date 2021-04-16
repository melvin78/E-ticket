<?php


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

    <script src="../../js/register.js"></script>

    <style type="text/css">

        .card {
            box-shadow: 0 0 10px 0 rgba(100, 100, 100, 0.26);
        }



    </style>

</head>


<body>


<br>
<div class="modal fade" id="register-success" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Registration success</h5>

            </div>
            <div class="modal-body">
                Successfully registered login with the set username and password. Click on login to go to the login page
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="modal-login" data-dismiss="modal">LOGIN</button>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6" id="alert-registration-failed">

    </div>
    <div class="col-md-3"></div>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 card shadow  " id="reg-form-div">
        <h5><i>PS:This is just a test application no need to key in your actual email address or name :).Just
                remember the credentials you used ,you will need it to login in.</i></h5>
        <div class="pt-3 pb-3">

            <div class="form-group">
                <label for="firstname">First name</label>
                <input type="text" class="form-control" id="firstname" placeholder="First name" required>
                <div class="invalid-feedback first-name-validation">
                    Please provide first name
                </div>
            </div>
            <div class="form-group ">
                <label for="secondname">Second Name</label>
                <input type="text" class="form-control" id="secondname" placeholder="Second Name" required>
                <div class="invalid-feedback second-name-validation">
                    Please provide second name.
                </div>
            </div>

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
            <div class="form-group ">
                <label for="inputState">Password Confirmation</label>
                <input type="password" class="form-control" id="password_confirmation"
                       placeholder="password_confirmation" required>
                <div class="invalid-feedback password-confirmation-validation">
                    password confirmations do not match.
                </div>
            </div>


            <button id="register-me" class="btn btn-primary ">REGISTER ME</button>

        </div>
    </div>
    <div class="col-md-3"></div>
</div>

</body>
</html>
<script>

</script>


