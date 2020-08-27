<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('albun', 'albunController@albun');
Route::get('albun/{id}', 'albunController@albunById');
Route::post('albun', 'albunController@albunSave');
Route::put('albun/{albun}', 'albunController@albunUpdate');
Route::delete('albun/{albun}', 'albunController@albunDelete');


Route::get('faixa','faixaController@faixa');
Route::get('faixa/{id}', 'faixaController@faixaById');
Route::post('faixa', 'faixaController@faixaSave');
Route::put('faixa/{faixa}', 'faixaController@faixaUpdate');
Route::delete('faixa/{faixa}', 'faixaController@faixaDelete');


