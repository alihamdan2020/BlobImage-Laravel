<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mainController extends Controller
{
    public function index(){
        $result1=db::table('students')->get();
        $result2=db::table('teachers')->get();
        return view('display',['allstudents'=>$result1],['allteachers'=>$result2]);
    }

        public function getImage($id)
        {      
            $imageBlobP = DB::table('students')->where('id',$id)->value('studentImage');
            return response($imageBlobP)->header('Content-Type', 'image/jpeg');
        }
}
