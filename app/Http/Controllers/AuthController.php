<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::id()){
            return redirect(route('broker.dashboard'));
        }
        return view('index');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('broker.dashboard'))
                ->withSuccess('Signed in');
        }

        return redirect("/")->withErrors(['message' => 'Incorrect email or password!']);
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('broker.dashboard');
        }

        return redirect("/")->withSuccess('You are not allowed to access');
    }

    public function logout() {
        Auth::logout();

        return Redirect('/');
    }
}
