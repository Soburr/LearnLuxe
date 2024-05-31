<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }
    public function showRegsitrationForm() {
        return view('admin-auth.register');
    }

    public function register(Request $request) {

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $admin = new Admin([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $admin->save();

        Auth::guard('admin')->login($admin);

        return redirect()->intended('admin/dashboard');
    }

    public function showLoginForm() {
        return view('admin-auth.login');
    }

    public function login (Request $request) {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        if (Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password
            ])) {
                return redirect('/admin/dashboard')->with('success', 'You Are Logged In');
        } else {
                return redirect()->back()->withErrors('Invalid Credentials');
        }
        // $admin = Admin::where('email', $request->email)->first();

        // if($admin && Hash::check($request->password, $admin->password)) {
        //     Auth::login($admin);
        //     return redirect('/admin/dashboard')->with('success', 'You Are Logged In');
        // } else {
        //     return redirect()->back()->withErrors('Invalid Credentials');
        // }
     }



}
