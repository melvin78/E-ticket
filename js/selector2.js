$(document).ready(function(){


    $('#countyto').selectpicker();

    $('#locationto').selectpicker();

    load_data('county');

    function load_data(county, county_id = '')
    {
        $.ajax({
            url:"http://localhost/eTicket/handlers/location.php",
            method:"POST",
            data:{county_index:county, county_index_id:county_id},
            dataType:"json",
            cache:true,
            success:function(response)
            {
                var html = '';
                for(var count = 0; count < response.length; count++)
                {
                    html += '<option value="'+response[count].id+'" >'+response[count].name+'</option>';
                }
                if(county === 'county')
                {
                    $('#countyto').html(html);
                    $('#countyto').selectpicker('refresh');

                }
                else
                {
                    $('#locationto').html(html);
                    $('#locationto').selectpicker('refresh');

                }


            }
        })
    }

    $(document).on('change', '#countyto', function(){
        var county_id = $('#countyto').val();
        load_data('loc', county_id);
    });



});