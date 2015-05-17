$(document).ready(function() {
    try
    {
        /*-------Generic Date picker--------- */
        if ($( ".datepicker" ).length) {
            $('.datepicker').datepicker({
                dateFormat : 'dd/mm/yy'
            });
        }
        /*---------DatePicker Ends-----------*/
        
        $("#UserRegisterForm, #UserCommanderAddForm, #UserCommanderEditForm").validate();
        $("#UserEmail").rules("add", {
            "remote": {
                url: SITE_URL + "users/check_existing_email",
                type: "post",
            },
            messages: {
                remote: "Email is already registered",
            }
        });
        
        /*Validation for users login*/
        if ($( "#UserLoginForm" ).length) {
            $('#UserLoginForm').validate();
        }
    }
    catch ($e)
    {
        if ($e.length) {
            console.log($e);
        }
    }
    
    /*City autocomplete*/
    if ($('#city_name').length) {
        $('#city_name').autocomplete({
            source: function(term, response){
                $.getJSON(SITE_URL + 'cities/all_cities.json', 
                    {q: term, country_code: $('#UserDetailCountryCode').val() }, 
                    function(data) {
                        response(data.cities); 
                    });
            },
            select: function( event, ui ) {
                $( "#city_name" ).val( ui.item.City.name );
                $( "#UserDetailCityId" ).val( ui.item.City.id );
                return false;
            }
        })
        .autocomplete( "instance" )._renderItem = function( ul, item ) {
            return $( "<li>" )
                .append( "<a>" + item.City.name + "</a>" )
                .appendTo( ul );
        };
    }
});

$(document).on('click', '.change_status', function(){
    
    var current_element = $(this);

    $.post(SITE_URL + 'commander/users/change_status', {id : current_element.data('id'), status: current_element.data('status')}, function(response) {
        current_element.toggleClass('fa-toggle-off fa-toggle-on');
    });
});

$(document).on('click', '.next-register', function(e){
    
    var current_element = $(this);
    current_element.closest('form').submit();
});
