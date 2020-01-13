<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exerciseController extends Controller
{
    public function getExercise1() {
        return view('exercise1');
    }

    public function getExercise2() {
        return view('exercise2');
    }
}
