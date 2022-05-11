<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class UsersController extends Controller
{
    public function allUsers()
    {
        //$users = ["mariam", "mai", "mona"];
        // $users = DB::table('users')->get();
        $users = User::all();
        return view('users', compact('users'));
    }

    public function insert()
    {
        // echo "insert";
        $user=new User();
        $user->name="mariam mohamed";
        $user->email="m@gmail.com";
        $user->password=bcrypt("123456");
        $user->save();
    }
}
