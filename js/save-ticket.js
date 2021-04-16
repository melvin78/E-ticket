$(document).ready(function () {
    var details = JSON.parse(sessionStorage.getItem('final-seatdetails'))

    if (details==null){

        window.location.replace('buyTicket.php');
    }

    for (var c = 0; c < details.length; c++) {

        $('#confirmed-seat-details').append('    <div class="card shadow mt-3 pb-3" >\n' +
            '                <div class="card-body">\n' +
            '                    <div class="form-row form-final-details">\n' +
            '                        <div class="col">\n' +
            '                            <input readonly type="text"  value="' + details[c].fname.toUpperCase() + '" class="form-control-plaintext font-weight-bold first-name-confirmed" >\n' +
            '                        </div>\n' +
            '                        <div class="col">\n' +
            '                            <input readonly type="text"   value="' + details[c].sname.toUpperCase() + '" class="form-control-plaintext font-weight-bold second-name-confirmed" readonly>\n' +
            '                        </div>\n' +
            '                        <div class="col">\n' +
            '                            <input readonly type="text"  value="' + details[c].sno.toUpperCase() + '" class="form-control-plaintext font-weight-bold sno-confirmed" >\n' +
            '                        </div>\n' +
            '\n' +
            '                       \n' +
            '                    </div>\n' +
            '                </div>\n' +
            '\n' +
            '            </div>\n' +
            '\n' +
            '        </div>\n' +
            '\n'
        )

    }

    $(document).on("click ", "#book-seat-for-all-passengers", function (e) {

        $.ajax({
            type: "POST",
            url: 'http://localhost/eTicket/handlers/ticket.php',
            data: {details: details},
            dataType:'json',
            error: function (data, status, jq) {

            },
            success: function (data) {
console.log(data)
                if (data.res == 1) {
                    $('#confirm-ticket-modal').modal('show');
                    $('#confirmed-seat-details').remove();
                    $('#after-click').append('' +
                        '<div class="alert alert-success" role="alert">' +
                        'Tickets have been booked successfully. Click on the button below to view them' +
                        '<button id="view-my-tickets-btn" class="btn btn-primary">VIEW MY TICKETS</button>' +
                        '</div>')
                }
            }
        }).done(function () {
            sessionStorage.removeItem('final-seatdetails');
        })


    });

    $(document).on('click', '#view-my-tickets-btn', function () {
        window.location.href = 'view-my-booked-tickets.php';
    })


});

