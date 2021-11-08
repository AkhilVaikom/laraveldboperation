<?php

namespace App\Http\Controllers;
use App\Models\student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function add(){
        return view('add');
    }

    public function addPost(request $request){

       student::create($request->all());
       $students=student::get();
       return view('display',['students'=>$students]);
    }

    public function display(request $request)
    {
        $students=student::get();
       return view('display',['students'=>$students]);
    }

    public function deleteItem($id){
        student::where('id',$id)->delete();
        $students=student::get();
        return view('display',['students'=>$students]);
    }
    public function edit($id){
        $student=student::find($id);
        return view('update',['student'=>$student]);
    }

    public function updateItem($id,request $request){
       
        $request=$request->except('_token');
        $student=student::where('id',$id)->update($request);
        $students=student::get();
        return view('display',['students'=>$students]);
     }

    //
}
