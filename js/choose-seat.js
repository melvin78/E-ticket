$(document).ready(function () {



    var data = []

    $('#confirm-all-passenger-details').click(function () {
        if ($('#seat-form-details').children().length == 0) {
            $('#myModal').modal('show')
        }

        $('#seat-form-details').find('form').each(function () {

            var firstname = $(this).find('.firstname');
            var secondname = $(this).find('.secondname');
            var seatno = $(this).attr('id');

            firstname.change(function () {
                $(this).removeClass("is-invalid")
            })

            secondname.change(function () {
                $(this).removeClass("is-invalid")
            })

            firstname.each(function () {
                if ($(this).val() == '') {
                    $(this).addClass("is-invalid")
                }
            })
            secondname.each(function () {
                if ($(this).val() == '') {
                    $(this).addClass("is-invalid")
                }
            })


            if($('#seat-form-details').find(".is-invalid").length ==0){
                    var obj = {
                        fname: firstname.val(),
                        sname: secondname.val(),
                        sno: seatno,

                    }

                    data.push(obj)
                    sessionStorage.setItem('final-seatdetails', JSON.stringify(data))
                    window.location.href = 'confirm-ticket.php'
            }

        else {
                $('#error-modal').modal('show')
            }
        });



    });


})
