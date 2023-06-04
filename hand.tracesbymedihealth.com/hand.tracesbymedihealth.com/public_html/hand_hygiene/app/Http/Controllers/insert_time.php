<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class insert_time extends Controller

{
    public function settime()
    {
   
        $username = Cookie::get('HandHygiene_server_username');
        $transection = DB::table('transection')->get();
        $department=DB::table('department')->get();
        $persernal=DB::table('persernal')->get();
        
        return view('timeClock', [
            'username' => $username,
            'department' => $department,
            'persernal' => $persernal
        ]);
    }
}
