<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {

      return view('password/change-password',[
        "title" => "Ganti Password"
      ]);
    }

    public function changePassword(Request $request)
    {
        $request->validate([
          'current_password' => 'required',
          'password' => 'required|string|min:6|confirmed',
          'password_confirmation' => 'required',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Password lama tidak sesuai!');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        $request->session()->flash('success', 'Password Berhasil Diganti! Silahkan Login.');
        return redirect('/login');
    }
}