$(document).ready(function () {

    $.ajax({
        type: "GET",
        url: 'http://localhost/eTicket/handlers/seat.php',
        dataType: "json",
        success: function (data) {


            $('input[type=checkbox]:not(:checked)').change(function () {
                $(this).each(function () {

                        if ($(this).is(':checked')) {
                            $('#seat-form-details').append(
                                '<div class="card bg-light mt-5 shadow" id="fo' + $(this).attr('id') + '"> ' +
                                '<div class="card-header"> <h2>Seat details for passenger ' + $(this).attr('id') + '</h2></div>' +
                                '<div class="card-body">'+
                                '<form id="'+$(this).attr('id')+'" >\n' +
                                '  <div class="form-row passdetails">\n' +
                                '    <div class="form-group col-md-6">\n' +
                                '      <label for="firstname">First Name</label>\n' +
                                '      <input type="text" class="form-control firstname" id="firstname" placeholder="First Name" required>\n' +
                                '<div  class="invalid-feedback second-name-validation">\n' +
                                '      Please provide first name.\n' +
                                '    </div>'+
                                '    </div>\n' +
                                '    <div class="form-group col-md-6">\n' +
                                '      <label for="secondname">Second Name</label>\n' +
                                '      <input type="text" class="form-control secondname" id="secondname" placeholder="Second Name" required>\n' +
                                '<div class="invalid-feedback second-name-validation">\n' +
                                '      Please provide a second name.\n' +
                                '    </div>'+
                                '    </div>\n' +
                                '  </div>\n' +
                                '</form>'+
                                '</div>'+
                                '</div>'
                            )

                        }
                        else {


                            $('#fo'+$(this).attr('id')).remove()

                        }
                    })



                });





            for (var c = 0; c < data.length; c++) {
                if (data[c].status == 1) {
                    $('#' + data[c].sno).prop('disabled', true);

                }

            }


        }
    });


     $(document).on("click ","#add-passenger",function(e){
        $(this).each(function () {
            e.preventDefault();
          var firstname= $(this).siblings().find('#firstname').val()
            var secondname=$(this).siblings().find('#firstname').val();

        })

    });


});