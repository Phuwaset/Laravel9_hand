<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="{{ asset('assets/js/jquery/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery/time.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E
    <link rel="preconnect"
        href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="{{ asset('assets/js/logout.js') }}"></script>


</head>

<body>

    <div class="grid grid-cols-3 gap-4">
        <style>
        @media screen and (max-width: 750px) and (min-width: 280px) {
          .grid-cols-3 {
            grid-template-columns: repeat(1, minmax(0, 1fr));;
          }
        }
        </style>
        <div class="p-2">
         	
         </div>
		
        <div class="p-2 text">
            <br>
            <br>
            <br>

            <div class="my-2 p-7 mr-">
                Observer : <p class=" float-right">{{ $username }}</p> <br>

                Department : <p id="demo" class=" float-right"> : </p><br>

                Persornal : <p id="demo2" class=" float-right"></p> <br>

                Type : <p id="demo3" class=" float-right"> </p> <br>

                Moment :<p id="demo4" class=" float-right"> </p>

            </div>


            <div class="text-center">


                <button id="start" class="p-2.5 bg-blue-500 text-white w-20  hover:bg-blue-400 rounded-full"
                    onclick="myFunction()">START</button>

                <style>
                    #mydiv {
                        width: 100%;
                        padding: 20px 0;
                        text-align: center;

                        margin-top: 20px;
                    }
                </style>
                                          
                <script>
                    function myFunction() 
                    {
                        var x = document.getElementById("mydiv");
                        var y = document.getElementById("start");     
                        y.style.display = "none";                                         
                        if (x.style.display === "none")
                       {
                            x.style.display = "block";
                        } 
                        else 
                       {
                            x.style.display = "block";
                        }
                    }
                    window.onload = function() {
                        document.getElementById('mydiv').style.display = 'none';
                    }
                </script>
                
            </div>
        </div>
                                                     
        <div class="p-2">
            <div class="flex flex-col items-end">
                <div>
                    <img src="{{ asset('assets/image/logo.png') }}" class=" text-center  w-20 mr-4 " alt="">
                    <button class="p-2.5 bg-white rounded-md hover:bg-slate-50" id="logout_btn"
                        onclick="logouts()">Logout</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        /********************************** The switch - the box around the slider  ************************/
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
    </head>

    <body>
        <!-- The Modal -->
        <div id="mydiv" class="" hidden="hidden">
            <!-- Modal content -->
                   <h1>
                    <p data-time="" id="timer">0 seconds </p>
                </h1>
            <br><br><br><br>
            <div class="modal-content">
                <div class="col">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>  Step : 1
                </div><br><br>
            <!-- Modal content -->
            <div class="modal-content">
                <div class="col">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label> Step : 2
                </div><br><br>
            <!-- Modal content -->
            <div class="modal-content">
                <div class="col">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label> Step : 3
                </div><br><br>
            <!-- Modal content -->
            <div class="modal-content">
                <div class="col">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label> Step : 4
                </div><br><br>
            <!-- Modal content -->
            <div class="modal-content">
                <div class="col">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label> Step : 5
                </div><br><br>
            <!-- Modal content -->
            <div class="modal-content">
                <div class="col">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label> Step : 6
                </div><br><br>
            <!-- Modal content -->
            <div class="modal-content">
                <div class="col">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label> Step : 7
                </div><br><br>


               


                <button value="5" id="stop"
                    class="p-2.5 bg-red-700 text-white w-20  hover:bg-red-600 left-500 rounded-full"
                    name="stop">FINISH</button><br>
            </div>

        </div>


        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>




        <!-- Testttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt* -->

        <script>
            let countdown;
            let timerDisplay = document.getElementById('timer');
            let check = 0;
        </script>
        <script src="test.js"></script>
    </body>

</html>
