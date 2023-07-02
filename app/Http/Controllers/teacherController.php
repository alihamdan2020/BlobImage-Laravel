<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;
class teacherController extends Controller
{
    public function addNewTeacher(Request $req){

        $req->validate([
            'teacherName' => 'required|unique:teachers',
            'teacherImage' => 'required|mimes:jpg,png',

        ]);


        $teacher = new Teacher();

        $image = $req->file('teacherImage');
        $imageData = file_get_contents($image->getPathName());

        $teacher->teacherName=$req->input('teacherName');
        $teacher->teacherImage=$imageData;

        $teacher->save();
        

    }
}
