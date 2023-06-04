<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserController extends Controller
{
    public function Login(Request $request)
    {
        $recv = $request->all();
        $username = $recv['username'];
        $password_text = $recv['password'];

        $user = DB::table('users')
        ->select('users.id', 'users.name', 'users.username', 'users.password')

        ->where('users.username', $username)
        ->where('deleted_at', null)
        ->first();

        $minutes = time() + 60 * 60 * 6;
        if (Hash::check($password_text, $user->password)){
            Cookie::queue('HandHygiene_server_id', $user->id, $minutes);
            Cookie::queue('HandHygiene_server_name', $user->name, $minutes);
            Cookie::queue('HandHygiene_server_username', $user->username, $minutes);
        }else{
            return json_encode([
                "status" => "error",
                "message" => 'username or password invalid'
            ]);
        }

        return json_encode([
            "status" => "ok",
            "message" => 'login successfully'
        ]);
    }

    public function CreateUser(Request $request)
    {
        $recv = $request->all();
        $username = $recv['username'];
        $password_text = $recv['password'];
        $name = $recv['name'];
        $password_hash = Hash::make($password_text);

        try {
            DB::table('users')
            ->insert([
                'name' => $name,
                'username' => $username,
                'password' => $password_hash,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        } 
        
        catch (\Throwable $th) {
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
