<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Test extends Model
{
    public $table = 'tests';

    public function getCorrectAnswer($question_id, $answer) {
        return DB::table('tests')
            ->where('id', '=', $question_id)
            ->select('correct_answer', 'point', 'id_exam')
            ->first();
    }
    public function totalScore($id_exam){
         return DB::table('tests')
            ->where('id_exam', '=', $id_exam)
            ->sum('point');

    }
}
