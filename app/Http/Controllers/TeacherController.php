<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    //

    public function viewTeacher(){
        return view('view-teacher');
    }

    public function addTeacher()
    {
        return redirect()->back();
    }


    public function storeTeacher(Request $request)
    {
        $teachers = Teacher::create([

        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'password' => bcrypt($request->input('password')),

        ]);

        return redirect()->route('edit.teacher');
    }

    public function editTeacher()
    {
        $teachers = Teacher::all();

        return view('edit-teacher', compact('teachers'));
    }


    public function updateTeacher($id)
    {
        $teacher = Teacher::findOrFail($id);

        return view('update-teacher', compact('teacher'));
        
    }

    public function submitTeacher(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        $teacher->update([

            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
    
            ]);

            return redirect()->route('edit.teacher');
    }

    public function deleteTeacher($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->back();
    }


   


    

}