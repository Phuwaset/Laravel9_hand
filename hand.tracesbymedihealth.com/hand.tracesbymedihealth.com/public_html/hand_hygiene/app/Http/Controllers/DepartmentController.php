<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DepartmentController extends Controller
{
    public function inserts(Request $request)
    {  
        $redp = $request->all();
        $option_department = $redp['id_dep'];
        $option_personal = $redp['id_pn'];
        $option_type = $redp['type'];
        $option_moment = $redp['moment'];
        try {
            DB::table('transection')
            ->insert([
                'id_dep' => $option_department,
                'id_pn' => $option_personal,
                'type' => $option_type,
                'moment' => $option_moment,
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
