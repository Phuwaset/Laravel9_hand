
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="{{ asset('assets/js/jquery/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery/time.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">


    <script src="{{ asset('assets/js/logout.js') }}"></script>
    <script src="{{ asset('assets/js/insertINTO.js') }}"></script>
</head>

<body>

    <div class="flex flex-col items-end">
        <div>
            <img src="{{ asset('assets/image/logo.png') }}" class=" text-center  w-20 mr-4 " alt="">
            <button class="p-2.5 bg-white rounded-md hover:bg-slate-50" id="logout_btn" onclick="logouts()">Logout</button>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-4">
      <style>
        @media screen and (max-width: 750px) and (min-width: 280px) {
          .grid-cols-3 {
            grid-template-columns: repeat(1, minmax(0, 1fr));;
          }
        }
        </style>
        <div class="p-2"></div>

        <div class="p-2">
           
            Observer : {{ $username }}
           
            <hr><br>
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 text-dark">
               
            </label>
			<label for="countries" class="block mb-2 text-sm font-normal text-gray-900 dark:text-dark">Department
                :</label>	
            <select
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                id="option_department" >
                @foreach ($department as $row)
                    
                    <option value="{{ $row->id }}">{{ $row->department_name }}</option>
                @endforeach
            </select>
            <script></script>
            <br>
            <label for="countries" class="block mb-2 text-sm font-normal text-gray-900 dark:text-dark">Personal
                :</label>

            <select
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                id="option_personal" >
                @foreach ($persernal as $row)
                    <option value="{{ $row->id }}">{{ $row->personal_name }}</option>
                @endforeach


            </select>
            <br>

            <label for="countries" class="block mb-2 text-sm font-normal text-gray-900 dark:text-dark">Type :</label>

            <select
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                id="option_type">

                <option value="1" selected>HAND WASH</option>
                <option value="2">HAND RUB</option>
            </select>
            <br>

            <label for="countries" class="block mb-2 text-sm font-normal text-gray-900 dark:text-dark">Moment :</label>
            <select
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                id="option_moment">
                <option value="1" selected>Before Touching Patient</option>
                <option value="2">Before Aseptic Procedure</option>
                <option value="3">After Touching A Patient</option>
                <option value="4">After Touching Patient Surrounding</option>
                <option value="5">After Body Fluid Exposure Risk</option>
                
            </select>
            <script>
                /// ฟังชั่นของปุ่ม เพื่อเก็บข้อมูลที่เลือกจาก select 
                function DeFunction(sel,sel2,sel3,sel4) {
                    ///select Deparment
                    let s = sel.options[sel.selectedIndex].text
                    sessionStorage.setItem("de",s);    
                    ///select Persernal
                    let ps = sel2.options[sel2.selectedIndex].text
                    sessionStorage.setItem("pe",ps);    
                     ///select Type
                     let tp = sel3.options[sel3.selectedIndex].text
                    sessionStorage.setItem("type",tp);    
                    ///select moment
                    let mm = sel4.options[sel4.selectedIndex].text
                    sessionStorage.setItem("moment",mm);    
                }
    
    
            </script>
            <br>
            <button class="p-2.5 bg-blue-500 text-white w-full rounded-md hover:bg-blue-400"
                id="stops" onclick="DeFunction(DeFunction(document.getElementById('option_department'), document.getElementById('option_personal'), document.getElementById('option_type'),document.getElementById('option_moment')))"></>NEXT</a></button> <!-- insert id -->
                
        </div>
        </form>
    </div>
</body>

</html>
