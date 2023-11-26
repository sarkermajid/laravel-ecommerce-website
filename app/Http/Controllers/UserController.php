<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function manage()
    {
        $users = User::where('role_as', 0)->orderBy('id', 'desc')->get();

        return view('admin.users.manage', compact('users'));
    }

    public function view($id)
    {
        $user = User::find($id);

        return view('admin.users.view', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->password = Hash::make($request->password);
        $user->update();

        return redirect()->route('user.manage')->with('message', 'User Passwords updated successfully');
    }

    public function delete(Request $request)
    {
        $user = User::find($request->user_id);
        $user->delete();

        return response()->json([
            'status' => 'success',
        ]);
    }
}
