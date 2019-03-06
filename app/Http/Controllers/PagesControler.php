<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class PagesControler extends Controller
{
    public function index(){
        $students = Student::paginate(5);

        return view('pages.index',compact('students'));
    }

    public function create(){
        return view('pages.create');
    }

    public function edit($id){
        $student = Student::find($id);
        return view('pages.edit', compact('student'));
    }
}
