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

    public function status($id)
    {
        $user = User::find($id);
        if($user->status == 1){
            $user->status = 0;
        }else{
            $user->status = 1;
        }
        $user->save();
        return redirect()->route('user.manage')->with('message','User Status Updated Successfully');
    }
}
