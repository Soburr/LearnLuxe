<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    public function bioData() {
        $student = Auth::user();

        $name = $student->name;
        return view('student.biodata', [
            'name' => $name
        ]);
    }
}
