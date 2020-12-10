$(document).ready(function () {
    $("#loginbox").submit(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "database.php",
            data: $(this).serialize(),
            success: function (response) {
                var jsonData = JSON.parse(response);
  
                // user is logged in successfully in the back-end
                // let's redirect
                if (jsonData.success == "1")
                {
                    document.location.href = 'ProductPage.html';
                }
                else  if (jsonData.success == "2")
                {
                    alert('Password should start with Uppercase and only contain character and digit');
                }
                else  if (jsonData.success == "0")
                {
                    alert('Invalid Credentials!');
                }
            }
        });
        
    });
});