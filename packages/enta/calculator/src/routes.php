<?php



Route::get('calculator', function() {
    echo 'Hello from the calculator package';
});

Route::get('add/{a}/{b}', 'Enta\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Enta\Calculator\CalculatorController@subtract');
Route::get('multiply/{a}/{b}', 'Enta\Calculator\CalculatorController@multiply');
Route::get('divide/{a}/{b}', 'Enta\Calculator\CalculatorController@divide');