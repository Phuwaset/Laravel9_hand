$(document).ready(function () {
    let countdown;
    let timerDisplay = document.getElementById("timer");
    var check = 0;
    ///select depart
    var x = sessionStorage.getItem("de");
    document.getElementById("demo").innerHTML = x;

    ///select persernal
    var p = sessionStorage.getItem("pe");
    document.getElementById("demo2").innerHTML = p;
    ///select type
    var tp = sessionStorage.getItem("type");
    document.getElementById("demo3").innerHTML = tp;

     ///select moment
     var mm = sessionStorage.getItem("moment");
     document.getElementById("demo4").innerHTML = mm;
 

    // ทำต่อไปด้วยค่า timeValue ที่ได้จากการเลือก option
    function startCountdown() {
        var x = sessionStorage.getItem("test1");
        var seconds = 0;
        

       // alert("ใช้เวลาผ่าน" + x);
        countdown = setInterval(function () {
            
            seconds++;
            check++;
            timerDisplay.textContent = seconds + " seconds";

            if (seconds === x) {
                clearInterval(countdown);
               // alert("หมดเวลา ใช้เวลาทั้งหมด " + check + " " + "วินาที");
                check = 0;
            }
        }, 1000);
    }

    $("#start").click(function (e) {
        e.preventDefault();
        startCountdown();
    });

    $("#stop").click(function (e) {
        e.preventDefault();
        window.location.href = "/dashboard";
        stopCountdown();
        
    });

    // ฟังก์ชั่นหยุดการนับเวลา
    function stopCountdown() {
        sessionStorage.setItem("timestam", check);
        clearInterval(countdown);
    
        //alert("ใช้เวลาทั้งหมด" + check + " " + "วินาที");

        let option_times = check;
        $.ajax({
            type: "POST",
            url: "/user/times",
            data: {
                times: option_times,
            },
            dataType: "json",
            success: function (response) {
                if (response.status === "ok") {
                    window.location.href = "/dashboard";
                } else {
                    console.log(response.message);
                    //alert(response.message);
                    //window.location.href = "/";
                }
            },
        });

       
        //return check;
    }

    $("#stop").click(function (e) {
        e.preventDefault();


        console.log(option_times);

        check = 0;
        
        $.ajax({
            type: "POST",
            url: "/user/times",
            data: {
                times: option_times
            },
            dataType: "json",
            success: function (response) {
                if (response.status === 'ok'){
                    window.location.href = "/total";
                }else{
                    alert(response.message);
                }
            }
        });

    });

});


///------------------------------>Dashboard<--------------------------------------------------
function dash(){
    window.location.href = "/dashboard";
}
