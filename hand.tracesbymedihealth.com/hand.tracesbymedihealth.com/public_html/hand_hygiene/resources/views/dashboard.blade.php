<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="{{ asset('assets/js/jquery/jquery-3.6.4.min.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">




    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/logout.js') }}"></script>
    <script src="{{ asset('assets/js/jquery/time.js') }}"></script>
</head>

<body class="bg-slate-50">

    <div class="flex flex-col items-end">
        
        <div class="float-right">
            <img src="{{ asset('assets/image/logo.png') }}" class=" ml-20 text-center w-20 " alt="">


            <button class="p-2.5 bg-white rounded-md hover:bg-slate-50" id="logout_btn" onclick="logouts()">Logout</button>
            <button class="px-8 py-2.5 bg-blue-500 text-white rounded-md hover:bg-blue-400 my-6 mx-3"><a
                href="{{ route('next_insert') }}">Observe</a></button>

        </div>
    </div>
    <div class="p-4">
        <div class="grid grid-rows-1 lg:grid-cols-3 gap-4">
            <div class="w-full">
                
                <div class="bg-white w-full shadow-md p-2 rounded-md">
                    <h1 class="w-full text-center px-10">Hospital</h1>
                    <div class="flex justify-center p-5">
                        <div class="w-60">
                            <canvas id="doughnut"></canvas>
                        </div>
                    </div>

                </div>
            </div>
            <div class="w-full">
                
                <div class="bg-white w-full shadow-md p-2 rounded-md">
                    <h1 class="w-full text-center px-10">Department</h1>
                    <div class="flex justify-center p-5">
                        <div class="w-60">
                            <canvas id="doughnut1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full">
              
                <div class="bg-white w-full shadow-md p-2 rounded-md">
                    <h1 class="w-full text-center px-10">Personal</h1>
                    <div class="flex justify-center p-5">
                        <div class="w-60">
                            <canvas id="doughnut2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full bg-white mt-4 border p-2">
            <canvas id="chart" width="100px" height="30px"></canvas>
        </div>
        <div class="flex w-full justify-end mt-4">
           
        </div>
    </div>
</body>

</html>
