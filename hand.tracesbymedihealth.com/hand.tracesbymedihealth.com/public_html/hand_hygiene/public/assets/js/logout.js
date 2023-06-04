function logouts() {
    $('#logout_btn').click(function (e) { 
        e.preventDefault();

        swal({
            title: "Success!",
            text: "Redirecting in 2 seconds.",
            type: "success",
            timer: 2000,
            showConfirmButton: false
          }, function(){
                window.location.href = "/logout";
          });
    });
   
};