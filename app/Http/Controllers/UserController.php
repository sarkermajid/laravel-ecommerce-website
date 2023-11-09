<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function manage()
    {
        $users = User::where('role_as',0)->orderBy('id','desc')->get();
        return view('admin.users.manage',compact('users'));
    }

}
