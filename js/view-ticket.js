$(document).ready(function () {


    $.ajax({
        type: "POST",
        url: 'http://localhost/eTicket/handlers/mytickets.php',
        dataType:'json',
        success: function (data) {

            if (data.length==0){
                $('#my-ticket-info').append('' +
                    '<div class="alert alert-warning" role="alert">' +
                    'Hmm...We cant find any records that you ever booked a ticket. Click on buy ticket to get one'+
                    '</div>' +
                    '' +
                    '')

            }
            else {


            for (var count = 0; count < data.length; count++) {
                    $('#my-ticket-info').append('' +
                        '<div class="mt-5">' +
                        '<div class="card shadow" >' +
                        '<div class="card-header">' +
                        '<div class="d-flex justify-content-around" >' +
                        '<div class="pr-1"><label>Ticket No:</label><strong>'+data[count].tno.toUpperCase()+'</strong></div>' +
                        '<div class="pr-1"><label>First Name:</label><strong>'+data[count].fname.toUpperCase()+'</strong></div>'+
                        '<div class="pr-1"><label>Second Name:</label><strong>'+data[count].sname.toUpperCase()+'</strong></div>' +
                        '<div class="pr-1"><label>Seat No:</label><strong>'+data[count].sno.toUpperCase()+'</strong></div>' +
                        '</div> ' +
                        '</div> ' +
                        '<div class="card-body"> ' +
                        '<div class="d-flex justify-content-around"> ' +
                        '<div class="pl-1"><label>Boarding Point:</label><strong>'+data[count].from.toUpperCase()+'</strong></div>' +
                        '<div class="pl-1"><label>Destination:</label><strong>'+data[count].to.toUpperCase()+'</strong></div>' +
                        '<div class="pl-1"><label>Departuretime:</label><strong>'+data[count].depart.toUpperCase()+'</strong></div>' +
                        '<div class="pl-1"><label>Expected Arrival Time:</label><strong>'+data[count].arrival_time.toUpperCase()+'</strong></div>' +
                        '</div>'+
                        '</div>' +
                        '<div class="card-footer d-flex justify-content-around>"' +
                        '<div class="pl-1"><label>Date of Issue:</label><strong>'+data[count].issued.toUpperCase()+'</strong></div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div> ' +
                        '')
            }
            }
        }
    })


});

