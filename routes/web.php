<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function() {
  return view('welcome');
});
//Yang di bawah buat list
Route::get('/list','ListController@index' ); // ieu teu bisa make {{ route('list.index') }}
Route::get('/list/add','ListController@add' );
Route::get('/list/{id}/edit','ListController@edit' ); // setam ceuk urng teh aneh eweuh value anhhee
Route::get('/list/{id}/delete','ListController@delete' ); // setam ceuk urng teh aneh eweuh value anhhee
Route::post('/list/store', [
  'uses' => 'ListController@store',
  'as' => 'list.store'
]);
Route::post('/list/update', [
  'uses' => 'ListController@update',
  'as' => 'list.update'
]);
//Yang di bawah buat todo1
Route::get('/todo','TodoController@index');
Route::get('/todo/add','TodoController@add');
Route::get('/todo/{id}/edit','TodoController@edit');///kieu menang copas teh -_- wakakw
Route::get('/todo/{id}/delete','TodoController@delete');
Route::post('/todo/store',[
  'uses'=>'TodoController@store',
  'as'=>'todo.store'
]);
Route::post('/todo/update',[
  'uses'=>'TodoController@update'
  ,'as'=>'todo.update'
]);
