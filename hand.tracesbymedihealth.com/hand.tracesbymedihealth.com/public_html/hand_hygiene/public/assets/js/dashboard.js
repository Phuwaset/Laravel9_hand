
$(document).ready(function () {

    $.ajax({
        type: "get",
        url: "/dashboard",
        data: "data",
        dataType: "json",
        success: function (response) {
            
        }
    });

    const ctx = document.getElementById("chart");
    var stam = sessionStorage.getItem("timestam");
    new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Before Touching Patient", "Before Aseptic Procedure", "After Touching A Patient", "After Touching Patient Surrounding", "After Body Fluid Exposure Risk"],
            datasets: [
                {
                    label: "Annual Hand Hygiene Queen Sirikit Naval Hospital in 2023 (N=32)",
                    data: [2, 3, 5, 2, 3,],
                    borderWidth: 1,
                 	backgroundColor: [
                        "rgb(45, 186, 132)",
                        "rgb(45, 186, 132)",
                       "rgb(45, 186, 132)",
                       "rgb(45, 186, 132)",
                      "rgb(45, 186, 132)",
                    ],
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });

    const ctx_doughnut = document.getElementById("doughnut");
    const ctx_doughnut1 = document.getElementById("doughnut1");
    const ctx_doughnut2 = document.getElementById("doughnut2");

    new Chart(ctx_doughnut, {
        type: "doughnut",
        data: {
            labels: ["Complete", "Incomplete"],
            datasets: [
                {
                    label: "Hospital",
                    data: [99, 1],
                    backgroundColor: [
                        "rgb(45, 186, 132)",
                        "rgb(255, 158, 0)",
                    ],
                    hoverOffset: 4,
                },
            ],
        },
    });
    new Chart(ctx_doughnut1, {
       type: "doughnut",
        data: {
            labels: ["Complete", "Incomplete"],
            datasets: [
                {
                    label: "Department",
                    data: [99, 1],
                    backgroundColor: [
                        "rgb(45, 186, 132)",
                        "rgb(255, 158, 0)",
                    ],
                    hoverOffset: 4,
                },
            ],
        },
    });
    new Chart(ctx_doughnut2, {
        type: "doughnut",
        data: {
            labels: ["Complete", "Incomplete"],
            datasets: [
                {
                    label: "Personal",
                    data: [99, 1],
                    backgroundColor: [
                        "rgb(45, 186, 132)",
                        "rgb(255, 158, 0)",
                    ],
                    hoverOffset: 4,
                },
            ],
        },
    });
});
