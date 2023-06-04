<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class Insert_Contorller extends Controller
{
    public function InsertView()
    {
        $username = Cookie::get('HandHygiene_server_username');
        $department=DB::table('department')->get();
        $persernal=DB::table('persernal')->get();
        
        return view('insertview', [
            'username' => $username,
            'department' => $department,
            'persernal' => $persernal
        ]);
    }
}
