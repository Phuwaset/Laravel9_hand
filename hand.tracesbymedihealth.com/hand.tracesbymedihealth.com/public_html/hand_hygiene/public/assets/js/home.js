$(document).ready(function () {

    $('#login_btn').click(function (e) { 
        e.preventDefault();
        let username_val = $('#input_login').val()
        let password_val = $('#input_password').val()

        $.ajax({
            type: "POST",
            url: "/user/login",
            data: {
                username: username_val,
                password: password_val
            },
            dataType: "json",
            success: function (response) {
                if (response.status === 'ok'){
                    window.location.href = "/dashboard";
                    
                }else{
                    alert(response.message);
                }
            }
        });
    });
});