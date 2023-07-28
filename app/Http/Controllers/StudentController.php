<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view("index", compact('students'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phonenumber' => 'required',
            'course' => 'required',
            'fee' => 'required|numeric', // Assuming fee is a numeric value
        ]);

        $student = new Student();
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->address = $request->input('address');
        $student->phonenumber = $request->input('phonenumber');
        $student->course = $request->input('course');
        $student->fee = $request->input('fee');
        $student->save();

        return back();
    }

    public function delete($id){
        $student = Student::find($id);
        $student->delete();
        return back();
    }

    public function edit($id){
        $student = Student::find($id);
        return view('edit', compact('student'));
    }


    public function update(Request $request, $id){
    
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->phonenumber = $request->phonenumber;
        $student->course = $request->course;
        $student->fee = $request->fee;
        $student->save();

        return redirect('/')->with('success', ' updated successfully!');
    }
}
