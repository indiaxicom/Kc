$(document).ready(function() {
    $("#UserRegisterForm").validate();
    $("#UserEmail").rules("add", {
        "remote": {
            url: "check_existing_email",
            type: "post",
        },
        messages: {
            remote: "Email is already registered",
        }
    });
});