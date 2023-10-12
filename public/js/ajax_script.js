
$(document).ready(function() {
	$('#login').on('click', function() {
		$("#loginForm").show();
		$("#signupForm").hide();
	});
	$('#register').on('click', function() {
		$("#signupForm").show();
		$("#loginForm").hide();
	});
});   
$(document).ready(function() {
    $('#loginForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '/user/login',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
                // user is logged in successfully in the back-end 
                // let's redirect 
                //console.log(jsonData);
                if (jsonData.success == "1")
                {
                    
                  
                    $("#signupForm").hide();
                    $("#loginForm").show();
                    $("#success").show();
                    $('#success').html(jsonData.message); 
                    location.href = '/';
                   

                }
                else
                {
                    $("#error").show();
                    $('#error').html(jsonData.message); 
                    $("#signupForm").hide();
                    $("#loginForm").show();
             
                }
           }
       });
     });
});
$(document).ready(function() {
    $('#signupForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '/user/signup',
            data: $(this).serialize(),
            success: function(response)
            {
              //console.log(response);
                var jsonData = JSON.parse(response);
                // user is logged in successfully in the back-end 
                // let's redirect 
                
                if (jsonData.success == "1")
                {
                    $("#signupForm").hide();
                    $("#loginForm").hide();
                    $("#success").show();
                    $('#success').html(jsonData.message); 
                    //location.href = '/';
                    
                }
                else
                {
                    $("#success").show();
                    $('#success').html(jsonData.message); 
                    $("#error").show();
                    $('#error').html(jsonData.errors); 
                
                }
           }
       });
     });
});

function logout() {
    var user_confirm = confirm("Do you really want to log out?");
    if (user_confirm) {
        window.location.href = '/user/logout'
    }
} 