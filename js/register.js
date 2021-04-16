$(document).ready(function () {


    $('#register-me').click(function () {


        var fname = $('#firstname');
        var sname = $('#secondname');
        var email = $('#email');
        var ps = $('#password');
        var psconf = $('#password_confirmation');

        fname.change(function () {
            $(this).removeClass("is-invalid")
        })

        sname.change(function () {
            $(this).removeClass("is-invalid")
        })

        email.change(function () {
            $(this).removeClass("is-invalid")
        })

        ps.change(function () {
            $(this).removeClass("is-invalid")
        })

        psconf.change(function () {
            $(this).removeClass("is-invalid")
        })


        if (fname.val() == '') {

            $(fname).addClass("is-invalid");
        } else if (sname.val() == '') {
            $(sname).addClass('is-invalid');
        } else if (email.val() == '') {
            $(email).addClass('is-invalid');
        } else if (ps.val() == '') {

            $(ps).addClass('is-invalid');
        } else if (ps.val() !== psconf.val()) {
            $(psconf).addClass('is-invalid');
        } else {
            var f_fname = $('#firstname').val();
            var f_sname = $('#secondname').val();
            var f_email = $('#email').val();
            var f_password = $('#password').val();
            var f_password_confirmation = $('#password_confirmation').val();

            $.ajax({
                type: "POST",
                url: 'http://localhost/eTicket/handlers/register.php',
                data: {
                    fname: f_fname,
                    sname: f_sname,
                    email: f_email,
                    password: f_password,
                    password_confirmation: f_password_confirmation
                },
                dataType: "json",
                success: function (data) {

                    if (data.res == true) {

                        $('#reg-form-div').remove();
                        $('#alert-registration-failed').append(' <div class="alert alert-success" role="alert">\n' +
                            '            Successfully registered!Login with your registered credentials.You will be redirected to the login page in a few...\n' +
                            '        </div>')

                        setTimeout(function () {
                            window.location.href='login.php'
                        },4000)
                    }
                    else {

                        $('#alert-registration-failed').append(' <div class="alert alert-danger alert-dismissible fade show" role="alert">\n' +
                            '            Unfortunately you are already registered.If you wish to reset your password click <a href="http://localhost/eTicket/views/ticket/resetpassword.php">here</a> ' +
                            '.If you would like to register with a different email you are welcomed to do so.\n' +
                            '<button  type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                            '    <span aria-hidden="true">&times;</span>\n' +
                            '  </button>'+
                            '        </div>')


                    }



                }

            })
        }

    })




})

