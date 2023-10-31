<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\admin\LoginController;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login () {

        return view ('admin/login');
    }


    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse

    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin/index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/admin/login');
}
    public function profile() {
        return view ('admin/profile/edit');

    }

public function update(Request $request){
  $login_id = Auth::user()->id;
  $user = User::find($login_id);
  $user->name = $request->input('name');
  $user->email = $request->input('email');
  $user->update();
  Session::flash('message', "Profile Updated Succefully");
  return view ('admin/profile/edit');
}
}
