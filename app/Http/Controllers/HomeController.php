<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Models\Package;


class HomeController extends Controller
{

    public function index(){

        $packages =  Package::all();
        return view('home',compact('packages'));
    }

    public function plans(){

        $packages =  Package::all();
        return view('pricing_plans',compact('packages'));
    }



    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register()
    {
        $this->validate(request(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'confirm_password' => 'required|same:password',
        ]);
        
        $user = User::create(request(['firstname', 'lasttname', 'password']));
        event(new Registered($user));
        auth()->login($user);
        
        return redirect()->to('/')->with('success', 'User Registered Succeefully!');
    }

    public function logout(Request $request)
	{
	    Auth::logout();
	    $request->session()->invalidate();
	    $request->session()->regenerateToken();
	    return redirect('/');
	}
}