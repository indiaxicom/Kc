$(document).ready(function() {
    try
    {
        $("#UserRegisterForm, #UserCommanderAddForm, #UserCommanderEditForm ").validate();
        $("#UserEmail").rules("add", {
            "remote": {
                url: SITE_URL + "users/check_existing_email",
                type: "post",
            },
            messages: {
                remote: "Email is already registered",
            }
        });
    }
    catch ($e)
    {
        
    }

});

$(document).on('click', '.change_status', function(){
    
    var current_element = $(this);

    $.post(SITE_URL + 'commander/users/change_status', {id : current_element.data('id'), status: current_element.data('status')}, function(response) {
        current_element.toggleClass('fa-toggle-off fa-toggle-on');
    });
})
