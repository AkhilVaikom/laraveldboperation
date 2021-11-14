<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers=teacher::paginate(4);
        return view('teachers.index',['teachers'=>$teachers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            't_name' => 'required|unique:teachers|min:2|max:255|regex:/^[a-zA-Z]+$/u',
            't_subject' => 'required',
            't_phone' => 'required',
            't_email' => 'required',
        ]);

       teacher::create($request->all());
       $teachers=teacher::paginate(4);
       return view('teachers.index',['teachers'=>$teachers]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(teacher $teacher)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(teacher $teacher)
    {
        $teacher=teacher::find($teacher->id);
        return view('teachers.update',['teacher'=>$teacher]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teacher $teacher)
    {
        $request=$request->except('_token','_method');
        $teacher=teacher::where('id',$teacher->id)->update($request);
        $teachers=teacher::paginate(4);
        return view('teachers.index',['teachers'=>$teachers]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(teacher $teacher)
    {
        $teacher=teacher::find($teacher->id);
        $teacher->delete();
        $teachers=teacher::paginate(4);
        return view('teachers.index',['teachers'=>$teachers]);
    }
}
