<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Test;
class TestsController extends Controller
{
    public function tests(Request $request)

    {
        $key = $request->key;
        $data = Test::where('id_exam', $key)->get();

        return view('tests', ['tests' => $data]);
    }
    public function checkAnswer()
    {

    }
}


