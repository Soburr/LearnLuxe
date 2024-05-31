<?php

namespace App\Http\Controllers;

use App\Mail\StudentRegistration;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    public function showRegsitrationForm() {
        return view('auth.register');
    }

    public function register(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:students,email',
        ]);

        $password = Str::random(8);

        $name = $validatedData['name'];
        $firstname = substr($name, 0, 3);
        $randomNumbers = '';

        do {
            $randomNumbers = mt_rand(1000, 9999);
        } while (DB::table('students')->where('student_id', $firstname.$randomNumbers)->exists());

        $student_id = $firstname.$randomNumbers;

        $student = new Student([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'student_id' => ($student_id),
            'password' => Hash::make($password)
        ]);

        $student->save();

        Auth::login($student);

        Mail::to($request->email)->send(new StudentRegistration($request->name, $student_id, $password));

        return redirect('/login')->with('success', 'Registration Successful, Please Check Your Mailbox For Your Login Details');
    }

    public function showLoginForm() {
        return view('auth.login');
    }

    public function login (Request $request) {

        $request->validate([
            'student_id' => 'required',
            'password' => 'required'
        ]);

        $student = Student::where('student_id', $request->student_id)->first();

        if($student && Hash::check($request->password, $student->password)) {
            Auth::guard('student')->login($student);
            return redirect('/student/dashboard')->with('success', 'You Are Logged In');
        } else {
            return redirect()->back()->withErrors('Invalid Credentials');
        }
    }
}
