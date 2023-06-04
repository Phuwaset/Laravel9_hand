<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class darshboad_controll extends Controller

{public function dashboad_S(Request $request){
    $data = DB::table('transection')->get(['times']); // ดึงคอลัมน์ 'time' จากตาราง transection
    $values = array();
    foreach ($data as $row) {
        $time = json_decode($row->time); // แปลงข้อมูลเวลาจาก JSON string เป็น Object
        $values[] = $time->value; // ดึงค่า value จาก Object ของเวลาและเก็บไว้ใน $values
    }
    return $values; // ส่งค่า value ทั้งหมดกลับไป
}

}
