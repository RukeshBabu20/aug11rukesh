<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function all(Request $request){

        $students = DB::table('students')->get();
        return view('all',['students'=>$students]);
    }
    public function index(Request $request){

        return view('index');
    }
    public function subject(Request $request){

        $students = DB::table('students')->get();
        return view('subject',['students'=>$students]);
    }
    public function store(Request $request){

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'status' => 1,
        ]);

        return redirect('/add-subject')->with('message','Student added successfully!');
    }
    public function save(Request $request){

        $marks = $request->marks;
        if($marks>=80){
            $grade = 'A';
        }elseif($marks>=70 && $marks<=79){
            $grade = 'B';
        }elseif($marks>=60 && $marks<=69){
            $grade = 'C';
        }else{
            $grade = 'D';
        }

        $student = Student::findOrFail($request->student_id);
        $student->subjects()->create([
            'subject_name' => $request->subject_name,
            'marks' => $request->marks,
            'grade' => $grade,
        ]);

        return redirect('/')->with('message','Subject added successfully!');
    }
    public function info(Request $request){

        $id = $request["id"];
        $students = DB::table('students')->where('id',$id)->get();
        $subjects = DB::table('subjects')->where('student_id',$id)->get();

        return view('info',['students'=>$students, 'subjects'=>$subjects]);
    }
    public function changeStatus(Request $request)
    {
        //dd('here');
        $user = Student::find($request->user_id);
        $user->status = $request->status;
        $user->save();
        return redirect()->back()->with('message1','Status changed successfully!');
    }
    public function destroy(Request $request) 
       {
        
        $id=$request["id"];
        Student::where('id', $id)->delete();
        return redirect()->back()->with('message','Student record deleted successfully');
       }
    
    public function edit(Request $request)
    {
        $id = $request["id"];
        $students = DB::table('students')->where('id',$id)->get();
        $subjects = DB::table('subjects')->where('student_id',$id)->get();
        return view('/edit',(['students'=>$students, 'subjects'=>$subjects]));
    }

    public function update(Request $request)
    {
        $id=$request["id"];
        $user = Student::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->state = $request->input('state');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->update(); 
        return redirect('/')->with('message','Student Updated Successfully');
    }
}
