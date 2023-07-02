<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    public function addNewStudent(Request $req){

        $req->validate([
            'studentName' => 'required|unique:students',
            'studentImage' => 'required|mimes:jpg,png',

        ]);


        $student = new Student();

        $image = $req->file('studentImage');
        $imageData = file_get_contents($image->getPathName());

        $student->studentName=$req->input('studentName');
        $student->studentImage=$imageData;

        $student->save();
        
        
        

    }
}

