<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    public function show() {
        $student = Auth::user();

        $name = $student->name;
        return view('student.biodata', [
            'name' => $name
        ]);
    }

    public function viewProfile() {
        $student = Auth::user();

        $name = $student->name;
        return view('student.view-profile', [
            'name' => $name
        ]);
    }

    public function updateProfile() {
        $student = Auth::user();

        $name = $student->name;
        $email = $student->email;
        $student_id = $student->student_id;


        return view('student.update-profile', [
            'name' => $name,
            'email' => $email,
            'student_id' => $student_id,
        ]);
    }
}
