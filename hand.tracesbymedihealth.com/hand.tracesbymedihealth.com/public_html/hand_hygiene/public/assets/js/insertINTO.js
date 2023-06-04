$(document).ready(function () {
    $('#stops').click(function (e) { 
        
        let option_department_val = $('#option_department').val();
        let option_personal_val = $('#option_personal').val();
        let option_type_val = $('#option_type').val();
        let option_moment_val = $('#option_moment').val();
       console.log(option_department_val);
        console.log(option_personal_val);
        console.log(option_type_val);
        console.log(option_moment_val);

        // window.location.href = "/total";

        var timeValue = 0;
        var timeValue2 = 0;

        var optionMoment =document.getElementById("option_moment").selectedIndex;
        var optionselect = document.getElementById("option_moment").options;
        var z = optionselect[optionMoment].index;
        k=z[-1];

        if (z === 0 || z === 1 || z===2 ||z===3) {
            timeValue = 20;
            sessionStorage.setItem("test1", timeValue);
        } else if (z === 4) {
            timeValue2 = 100;
            sessionStorage.setItem("test1", timeValue2);
        }
        console.log(`timeValue ${timeValue}, timeValue2 ${timeValue2}`)
        $.ajax({
            type: "POST",
            url: "/user/insert",
            data: {
                id_dep: option_department_val,
                id_pn: option_personal_val,
                type: option_type_val,
                moment: option_moment_val,
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

    // function myFunction() {
    //     var timeValue = 0;
    //     var timeValue2 = 0;

    //     var optionMoment =document.getElementById("option_moment").selectedIndex;
    //     var optionselect = document.getElementById("option_moment").options;
    //     var z = optionselect[optionMoment].index;
    //     k=z[-1];
    //     if (k === 0 || k === 1) {
    //         timeValue = 20;
    //         sessionStorage.setItem("test1", timeValue);
    //     } else if (k === 2 || k === 3) {
    //         timeValue2 = 10;
    //         sessionStorage.setItem("test1", timeValue2);
    //     }
    // }
});