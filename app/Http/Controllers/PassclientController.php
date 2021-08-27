<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PassclientController extends Controller
{
    public function index()
    {
        return view('dashboard/client/password', [
            "title" => "Change Password",
            "status" => ''
        ]);
    }

    public function change(Request $request, $id)
    {
        // $user = Hash::make($request['oldpassword']);
        // $credentials = $request->validate([
        //     'username' => auth()->user()->username,
        //     'password' => (isset($user)) ? auth()->user()->password : $request['oldpassword']
        // ]);

        // if (Auth::attempt($credentials)) {
        $user = User::whereId($id)->first();
        $user->update([
            'name' => auth()->user()->name,
            'username' => auth()->user()->username,
            'role' => auth()->user()->role,
            'email' => auth()->user()->email,
            'password' => Hash::make($request['password'])
        ]);
        return redirect('/password-client')->with('success', 'Password <strong>berhasil diubah!</strong>');
        // }

        // $user['password'] = Hash::make($user['password']);




        // $request->validate([
        //     'username' => auth()->user()->username,
        //     'password' => 'required|min:8|confirmed',
        //     'newpassword' => 'required'
        // ]);
        // $password = auth()->user()->password;
        // if (password_verify($request->password, $password)) {
        //     $status = 'success';
        // } else {
        //     $status = 'failed';
        // }

        // return view('dashboard/client/password', [
        //     "status" => $status
        // ]);
    }
}
