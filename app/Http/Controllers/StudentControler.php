<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentControler extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        $student = new Student;
        $student->first_name = $request->firstname;
        $student->last_name = $request->lastname;
        $student->email = $request->email;
        $student->phone= $request->phone;
        $student->save();

        return redirect(route('home'))->with('successMsg', 'information successfully added');
    }



    public function update(Request $request, $id){
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $student = Student::find($id);
        $student->first_name = $request->firstname;
        $student->last_name = $request->lastname;
        $student->email = $request->email;
        $student->phone= $request->phone;
        $student->save();

        return redirect(route('home'))->with('successMsg', 'information successfully update');
    }

    public function delete ($id){
       Student::find($id)->delete();


        return redirect(route('home'))->with('successMsg', 'information successfully Delete');

    }


}
