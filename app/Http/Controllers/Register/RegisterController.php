<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function register()
    {
        return view('index.index');
    }

    public function storeRegister(Request $request)
    {
        $gender = $request->gender;
        $marital_status = $request->marital_status;
        $grom_bride = $request->grom_bride; 
        $fullname = $request->fullname;
        $email = $request->email;
        $mobile = $request->mobile;
        $religion = $request->religion;
        $caste = $request->caste;
        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images2'), $imageName);

        $register = new Register();
        $register->gender = $gender;
        $register->marital_status = $marital_status;
        $register->grom_bride = $grom_bride;
        $register->fullname = $fullname;
        $register->email = $email;
        $register->mobile = $mobile;
        $register->religion = $religion;
        $register->caste = $caste;


        $register->profileimage = $imageName;
        $register->save();
        return back()->with('register_added', 'Register record has been inserted');
    }

    // public function students()
    // {
    //     $student = Student::all();
    //     return view('all-student', compact('student'));
    // }

    // public function editStudent($id)
    // {
    //     $student = Student::find($id);
    //     return view('edit-student', compact('student'));
    // }

    // public function updateStudent(Request $request)
    // {
    //     $name = $request->name;
    //     $image = $request->file('file');
    //     $imageName = time() . '.' . $image->extension();
    //     $image->move(public_path('images'), $imageName);

    //     $student = Student::find($request->id);
    //     $student->name = $name;
    //     $student->profileimage = $imageName;
    //     $student->save();
    //     return back()->with('student_updated', 'Student updated Successfully');
    // }

    // public function deleteStudent($id)
    // {
    //     $student = Student::find($id);
    //     unlink(public_path('images') . '/' . $student->profileimage);
    //     $student->delete();
    //     return back()->with('student_deleted', 'Student deleted successfully');
    // }
}
