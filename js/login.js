$(document).ready(function () {

    if ($('#logged-status').val()==true){
        window.location.replace('buyTicket.php')
    }


    $('#login-me').click(function () {


        var email = $('#email');
        var ps = $('#password');


        email.change(function () {
            $(this).removeClass("is-invalid")
        })

        ps.change(function () {
            $(this).removeClass("is-invalid")
        })


        if (email.val() == '') {
            $(email).addClass('is-invalid');
        } else if (ps.val() == '') {

            $(ps).addClass('is-invalid');
        } else {

            var f_email = $('#email').val();
            var f_password = $('#password').val();


            $.ajax({
                type: "POST",
                url: 'http://localhost/eTicket/handlers/login.php',
                data: {

                    email: f_email,
                    password: f_password,

                },
                dataType: "json",
                success: function (data) {

                  if (data.res==true){
                        $('#login-form-div').remove();
                        $('#alert-login').append(' <div class="alert alert-success" role="alert">\n' +
                            '  ' + '         Successfully Logged in! welcome back...You will be redirected to the home page in a few' +
                            '        </div>')

                        setTimeout(function () {
                            window.location.href='buyTicket.php'
                        },4000)
                    }
                    else {
                        $('#alert-login').append(' <div class="alert alert-danger" role="alert">\n' +
                            '            Whoops! Those credentials dont match our records try again' +
                            '<button  type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                            '    <span aria-hidden="true">&times;</span>\n' +
                            '  </button>'+
                            'If you dont have an account click here to<a href="register.php">register</a>'+
                            '        </div>')


                    }



                }

            })
        }

    })


})

