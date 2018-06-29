<?php

namespace Enta\Calculator;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    //
    public static function add($a, $b){
        $result = $a + $b;
        return $result;
    }

    public static function subtract($a, $b){
        $result = $a - $b;
        return $result;
    }

    public static function multiply($a, $b){
        $result = $a * $b;
        return $result;
    }

    public static function divide($a, $b){
        $result = $a / $b;
        return $result;
    }
}
