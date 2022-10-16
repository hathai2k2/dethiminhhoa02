<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_all_student(){
        $students = Student::all();
        return view('student.manager',['students' => $students]);
    }
    public function get_student_by_id($id)//show
    {
        $students = Student::FindOrFail($id);
        return view('student.edit',['students' => $students]);
    }
    public function create() {
        $students = Student::all();
        return view('student.add',['students' => $students]);
    }
    public function store(Request $request)
    {
        $students = new Student();
        $students->fullname = $request->txtFullname;
        $students->birthdate = $request->txtBirthdate;
        $students->address = $request->txtAddress;
        $students->save();
        return redirect('/');
    }

     public function edit(Request $request, $id)
    {
        $students = Student::FindOrFail($id);
        $students->fullname = $request->txtFullname;
        $students->birthdate = $request->txtBirthdate;
        $students->address = $request->txtAddress;
        $students->save();
        return redirect('/');
    }
    public function destroy($id)
    {
        $students = Student::FindOrFail($id);
        $students->delete();
        return redirect('/');
    }
    public function show ($id)
    {
        $students = Student::FindOrFail($id);
        return view('student.show',['students' => $students]);
    }
}
