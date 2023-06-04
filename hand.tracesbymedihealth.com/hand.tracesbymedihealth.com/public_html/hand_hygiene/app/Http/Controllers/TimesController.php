<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class TimesController extends Controller
{
    //
    public function timess(Request $request)
    {  
        
        $retm = $request->all();
        $option_times = $retm['times'];
        try {
            $max_id = DB::table('transection')->max('id');

            DB::table('transection') 
            ->where('id', $max_id)  
            ->update([
                
                'times' => $option_times,
            ]);
        } catch (\Throwable $th) {
            return json_encode([
                "status" => "error",
                "message" => $th
            ]);
        }
        return json_encode([
            "status" => "ok",
            "message" => "Register success"
        ]);
    }
}
