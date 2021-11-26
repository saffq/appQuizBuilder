<?php

namespace App\Http\Controllers;
use App\Score;
use http\QueryString;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Test;
class TestsController extends Controller
{
    public function tests(Request $request)
    {
        $key = $request->key;
        $data = Test::where('id_exam', $key)->get();
        return view('tests', ['tests' => $data]);
    }
    public function tests2(Request $request)
    {
        $key = $request->key;
        $data = Test::where('id_exam', $key)->get();
        return view('score', ['tests2' => $data]);
    }

    public function checkAnswers()
    {
        $answers = new Score();
        $answers = request('answer');
        $test = new Test();

        $points = 0;
        $id_exam = 0;
        foreach ($answers as $question_id => $answer) {
            $correct = $test->getCorrectAnswer($question_id, $answer);
            $points += ($correct->correct_answer == $answer) ? intval($correct->point) : 0;
            $id_exam = $correct->id_exam;
        }
        $total = $test->totalScore($id_exam);

        $scoreArray = [
            'points' => $points,
            'total' => $total
        ];


        return view('score', array('scoreArray'=>$scoreArray));

    }
}



