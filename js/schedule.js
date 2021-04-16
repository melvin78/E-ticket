$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: 'http://localhost/eTicket/handlers/schedule.php',
        dataType: "json",
        success: function (data) {

            if (data.length == 0) {
                var from = $('#hidden-from').val();
                var to = $('#hidden-to').val();
                $('#card-container').append('<div class="card shadow">' +
                    '  <div class="card-body ">' +
                    '    <h2>Unfortunately :( currently there is no bus scheduled or destined to go from ' + from.toUpperCase() + ' to ' + to.toUpperCase() + '  Click on the button below to choose another destination based on the travel timetable</h2>' +
                    '  </div>' +
                    '<div class="card-footer"><button class=" btn btn-primary" id="another-destination">Lets try another destination</button> </div>' +
                    '</div>')
            }


            for (var count = 0; count < data.length; count++) {
                $('#card-container').append(
                    '<form id="book-seat-form"  action="../ticket/choose-seat.php" method="post">' +

                    '<div class="mt-5 " >' +
                    '<div class="card shadow">' +
                    '<div class="card-header ">' +
                    '<div class="d-flex justify-content-around ">' +
                    '<div class="p-2"> <label>From:<input  id="from" readonly class="font-weight-bold form-control-plaintext" value="' + data[count].from + '" name="from" ></label></div> ' +
                    '<div class="p-2"><label>To: <input  id="to" readonly class="font-weight-bold form-control-plaintext" value="' + data[count].to + '" name="to" ></label></div>' +
                    '<div class="p-2"><label for="date">Travel Date:<input  id="date" readonly class="font-weight-bold form-control-plaintext" value="' + data[count].date + '" name="date" ></label></div>' +
                    '</div>' +///end d flex
                    '</div>' +///end card header
                    '<div class="card-title">' +
                    '<div class="p-2" ><label>No Of Seats Available: <strong id="seats-available' + data[count].bno + '"></strong></label></div>' +
                    '<div class="p-2"><label>Price: <strong>' + data[count].price + '</strong></label></div>' +
                    '<div class="p-2"><label>Departure Time: <strong >' + data[count].time + '</strong ></label></div>' +
                    '<div class="p-2"><label>Expected Arrival Time: <strong>' + data[count].arrival + '</strong></label></div>' +
                    '<div class="p-2"><label>Bus No: <input  id="bno" readonly class="font-weight-bold form-control-plaintext" value="' + data[count].bno + '" name="bno" ></label></div>' +
                    '</div>' +///end card title

                    '<div class="card-footer">' +
                    '<input type="submit" value="BOOK A SEAT" class="btn btn-primary" id="book-a-seat"/>' +
                    '  </div>' +
                    '</div>' +
                    '</div>' +
                    '</form>'
                )


            }
        }
    }).done(function () {
        $.ajax({
            type: "GET",
            url: 'http://localhost/eTicket/handlers/availableseats.php',
            dataType: "json",
            success: function (data) {


                for (var count = 0; count < data.length; count++) {
                    // console.log('#seats-available'+data[count].busno);
                    // console.log(data[count].busno);
                    $('#seats-available' + data[count].busno).html(data[count].seats)

                }
            }
        });

    })

    $(document).on('click', '#another-destination', function () {
        window.location.href = 'buyTicket.php';
    });


});

