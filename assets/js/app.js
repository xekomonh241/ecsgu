$(document).ready(function() {
    

});

function login() {
    var username = $('#username').val();
    var password = $('#password').val();

    var data = {
        'username': username,
        'password': password   
    };
    
    $.ajax({        
        url: './lib/checklogin.php',
        type: 'POST',
        data: data,
        success: function(response) {
            console.log(response)
            if(response == 0){
                console.log(response);
            }
            else{
                // window.location.href = "./index.php";
            }
        }
    });
}