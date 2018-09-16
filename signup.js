$(document).ready(function () {
    $('.signup-form').on("submit", function (event) {
        event.preventDefault();
        var firstname = $('#first-name').val();
        var lastname = $('#last-name').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var confirmpassword = $('#confirm-password').val();
        alert(firstname +" "+ lastname +" "+ email +" "+ password +" "+ confirmpassword);
        if(firstname == '' || lastname == '' || email == '' || password == '' || confirmpassword == '') {
            alert("all fields are mandatory");
        } else {
            if(password == confirmpassword) {
                $.ajax({
                    url: './register-user.php',
                    type: 'POST',
                    data: {
                        "firstname": firstname,
                        "lastname": lastname,
                        "email": email,
                        "password": password
                    },
                    success: function (data) {
                        // if(data == true) {
                        //     alert("updated successfully");
                        // } else {
                        //     alert("there is something wrong with the data");
                        // }
                        alert(data);
                    }
                });
            } else {
                alert("passwords are not same");
            }
        }
    });
});
