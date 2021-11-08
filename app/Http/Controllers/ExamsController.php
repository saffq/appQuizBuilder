<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
class ExamsController extends Controller
{
    public function exams()

    {
        $data = Exam::all();
        return view('welcome',['welcome'=>$data]);

    }
    public function examsHeader(){
        $data = Exam::all();
        return view('header',['header'=>$data]);
    }

}
