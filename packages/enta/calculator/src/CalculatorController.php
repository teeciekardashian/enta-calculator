<?php

namespace Enta\Calculator;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    //
    public function add($a, $b){
        $result = $a + $b;
        return view('calculator::calculate', compact('result'));
    }

    public function subtract($a, $b){
        $result = $a - $b;
        return view('calculator::calculate', compact('result'));
    }

    public function multiply($a, $b){
        $result = $a * $b;
        return view('calculator::calculate', compact('result'));
    }

    public function divide($a, $b){
        $result = $a / $b;
        return view('calculator::calculate', compact('result'));
    }
}
