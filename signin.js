$(document).ready(function(){
    $('.sign-in-form').on('submit', function (event) {
        event.preventDefault();
        var username = $('#username').val();
        var password = $('#password').val();
        $.ajax({
            url: './login-user.php',
            type: 'POST',
            data: {
                username: username,
                password: password
            },
            success: function(data) {
                data = data.trim();
                if(data == "true") {
                    window.location.href = "./index.php";
                } else {
                    alert("Either username or password is wrong");
                }
            }
        });
    });
});
