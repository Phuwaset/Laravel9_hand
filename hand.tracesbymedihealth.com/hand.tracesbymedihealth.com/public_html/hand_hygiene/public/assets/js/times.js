// $(document).ready(function () {
//     $('#stop').click(function (e) { 
//         e.preventDefault();

//         let option_times = ('#check').val();
        
//         console.log(option_times);
 
//         $.ajax({
//             type: "POST",
//             url: "user/times",
//             data: {
//                 times: option_times,
//             },
//             dataType: "json",
//             success: function (response) {
//                 if (response.status === 'ok'){
//                     window.location.href = "/";
//                 }else{
//                     alert(response.message);
//                 }
//             }
//         });
//     });
// });