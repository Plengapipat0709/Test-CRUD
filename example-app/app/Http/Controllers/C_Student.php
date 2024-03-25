<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Student;
use Illuminate\Support\Facades\DB;

class C_Student extends Controller
{
    //
    public function index(){
        $student = M_Student::all();
        return view('index',compact('student'));
    }
    public function create(){
        return view('add-student');
    }
    public function store(Request $request){
        $student = new M_Student;
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->major = $request->input('major');

        $student->save();

        return redirect('students');
    }

    public function edit($id){
        $student = M_Student::find($id);
        return view('edit-student',compact('student'));
    }
    public function update(Request $request,$id){
        $student = M_Student::find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->major = $request->input('major');
        $student->save();

        return redirect('students');
    }
    public function delete($id){
        $student = M_Student::find($id);
        $student->delete();

        DB::statement('SET @new_id = 0;');
        DB::statement('UPDATE student SET id = @new_id:=@new_id+1');
        DB::statement('ALTER TABLE student AUTO_INCREMENT = 1;');

        return redirect('students');
    }
}
