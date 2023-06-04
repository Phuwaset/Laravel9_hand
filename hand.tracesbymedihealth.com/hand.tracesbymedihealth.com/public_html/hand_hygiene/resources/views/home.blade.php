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
    <script src="{{ asset('assets/js/home.js') }}"></script>
</head>

<body>
    <div class="p-4">
        <div class="flex justify-center">
            <div class="my-2">
                <img class="object-scale-down h-48 w-96" src="{{ asset('assets/image/logo.png') }}" alt="">
            </div>
        </div>
        <div class="flex justify-center my-2 text-center">
            <h1 class="text-lg font-semibold">Application: Hand Hygiene Monitoring <br> Get well team together</h1>
        </div>
        <div class="flex flex-col justify-center my-2 items-center">
            <h1 class="text-lg">เข้าสู่ระบบ</h1>
            <div class="w-96 px-4 my-2">
                <input placeholder="ชื่อผู้ใช้" type="text" id="input_login"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="w-96 px-4 my-2">
                <input placeholder="รหัสผ่าน" type="password" id="input_password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="w-96 px-4 my-2">
                <button id="login_btn" class="p-2.5 bg-blue-500 text-white w-full rounded-md hover:bg-blue-400">ลงชื่อเข้าใช้</button>
            </div>
        </div>
    </div>

</body>

</html>
