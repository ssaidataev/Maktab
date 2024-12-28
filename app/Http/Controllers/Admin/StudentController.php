<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\StudentClasses;
use App\Models\StudentStatus;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index(){
        $students = Student::with(['user', 'student_classes', 'student_status'])->get();
        return view('admin.students.index', compact('students'));

    }
    public function create()
    {
        $classes = StudentClasses::where('is_active', 1)->get();
        $statuses = StudentStatus::where('is_active', 1)->get();
        return view('admin.students.create', compact('classes', 'statuses'));
    }
    public function store(Request $request){



        $validated_data =  $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['nullable', 'string', 'max:255'],
            'birth_date' => ['nullable', 'date'],
            'gender' => ['required'],
            'email' => ['nullable', 'string', 'email', 'max:255'],
            'password'=>['required', 'string', 'min:5', ],
            'phone' => ['required', 'string', 'max:35','min:9'],
            'address' => ['required', 'string', 'min:3'],
            'class_id' => ['required'],
            'status_id' => ['nullable'],

            ]);

        $user =  User::create([
            'first_name'=>$validated_data['first_name'],
            'last_name'=>$validated_data['last_name'],
            'middle_name'=>$validated_data['middle_name'],
            'username'=>$validated_data['username'],
            'birth_date'=>$validated_data['birth_date'],
            'gender'=>$validated_data['gender'],
            'email'=>$validated_data['email'],
            'password'=> Hash::make($validated_data['password']),
            'phone'=>$validated_data['phone'],
            'address'=>$validated_data['address'],

        ]);

        $student = new Student([
            'user_id' => $user->id,
            'class_id' => $validated_data['class_id'],
            'status_id' => $validated_data['status_id'],
            'created_by' => $validated_data['created_by'],
            'updated_by' => $validated_data['updated_by'],
        ]);
        $student->save();
        return redirect()->route('admin.students.index')->with('success', 'Student created successfully');

    }

}
