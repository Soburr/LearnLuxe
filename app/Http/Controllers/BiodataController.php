<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    public function show() {
        $student = Auth::user();

        $name = $student->name;
        return view('student.biodata', [
            'name' => $name,
            'student' => $student
        ]);
    }

    public function viewProfile($id) {

        $student = Student::findOrFail($id);
         return view('student.view-profile', [
             'student' => $student
         ]);
    }

    public function showUpdate($id) {
        $student = Student::findOrFail($id);

        return view('student.update-profile', [
            'student' => $student
        ]);
    }

    public function update (Request $request, $id) {
       $request->validate([
         'dob' => 'required|date',
         'class' => 'required|string|max:255',
         'gender' => 'required|string|max:255'
       ]);

       $student = Student::findOrFail($id);

       $student->update([
         'dob' => $request->input('dob'),
         'class' => $request->input('class'),
         'gender' => $request->input('gender')
       ]);

       return redirect()->route('view-profile', ['id' => $id])->with('success', 'Student Bio-Data Updated Successfully!');
    }
}
