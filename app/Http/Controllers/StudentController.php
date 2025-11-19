<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class StudentController extends Controller
{
    public function index(){
        $allsudent = student::all();
        // return view("student", compact("allsudent"));
        return view("Student", ["st"=>$allsudent]);
    }
    public function add(){
       $item = new student();
       $item->Name = "Hamid";
       $item->save();
       return "Added student successfully";
    }
}
