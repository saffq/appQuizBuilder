<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CorrectAnswers extends Controller
{
 function index()
 {
     return DB::table('tests')->get();
 }
}
