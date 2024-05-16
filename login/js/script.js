$(documet).ready(function() {
    $("from").submit(function (e) {
         Let user = $("#user").val();
         Let pwd = $("#pwd").val();
        
         if (user == "john@gmail.com" && pwd == "secreto" ) {
            alert("Welcome!");
         } else {
            alert("User or Password incorret!");
         }
        });
    });