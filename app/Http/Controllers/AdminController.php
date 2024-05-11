<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class AdminController extends Controller
{
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

        Auth::login($admin);

        return redirect('/admin/login');
    }

    public function showLoginForm() {
        return view('admin-auth.login');
    }

    public function login() {

    }

}
