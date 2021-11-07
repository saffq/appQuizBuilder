<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamsController extends Controller
{
    public function exams()

    { $data = exams::simplePaginate(1);
        return view('exams',['exams'=>$data]);

    }
}
