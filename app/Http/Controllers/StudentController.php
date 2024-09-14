<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //

    public function viewStudent(){
        return view('view_student');
    }

    public function addStudent()
    {
        return redirect()->back();
    }


    public function storeStudent(Request $request)
    {
        $students = Student::create([

        'student_id' => $request->input('student_id'),    
        'student_name' => $request->input('student_name'),
        'student_email' => $request->input('student_email'),
        'student_phone' => $request->input('student_phone'),
        'department' => $request->input('department'),

        ]);

        return redirect()->route('edit.student');
    }

    public function editStudent()
    {
        $students = Student::all();

        return view('edit_student', compact('students'));
    }


    public function updatestudent($id)
    {
        $student = Student::findOrFail($id);

        return view('update_student', compact('student'));
        
    }

    public function submitStudent(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->update([

            'student_id' => $request->input('student_id'),
            'student_name' => $request->input('student_name'),
            'student_email' => $request->input('student_email'),
            'student_phone' => $request->input('student_phone'),
            'department' => $request->input('department'),
    
            ]);

            return redirect()->route('edit.student');
    }

    public function deleteStudent($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->back();
    }


   


    

}