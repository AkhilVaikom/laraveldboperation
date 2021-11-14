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
        $validated = $request->validate([
            'name' => 'required|unique:students|min:2|max:255|regex:/^[a-zA-Z]+$/u',
            'subject' => 'required',
            'mark' => 'required',
        ]);

       student::create($request->all());
       $students=student::paginate(4);
       return view('index',['students'=>$students]);
    }

   
    public function index(request $request)
    {
        $students=student::paginate(4);
       return view('index',['students'=>$students]);
    }

    public function deleteItem($id){
        student::where('id',$id)->delete();
        $students=student::paginate(4);
        return view('index',['students'=>$students]);
    }
    public function edit($id){
        $student=student::find($id);
        return view('update',['student'=>$student]);
    }

    public function updateItem($id,request $request){
       
        $request=$request->except('_token');
        $student=student::where('id',$id)->update($request);
        $students=student::paginate(4);
        return view('index',['students'=>$students]);
     }

    //
}
