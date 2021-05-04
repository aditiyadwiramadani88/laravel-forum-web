<?php

use App\Http\Controllers\Answere;
use App\Http\Controllers\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Question::class, 'AllQuestion']);

// logout
Route::get("logout", function(Request $request) { 
    
    Auth::logout();
    $request->session()->flash("msg", "sucess logout");

    return redirect("login");
});                              


// question

Route::any("ask_question",[Question::class, "AskQuestion"]);
Route::get('search', [Question::class, 'SearchQuestion']);
Route::any('/detail_question/{id}', [Question::class, 'DetailQuestion'])->where('id', '[1-9]+');


Route::any('/edit_question/{id}', [Question::class, 'EditQuestion'])->where('id', '[1-9]+');
Route::any('delete_question/{id}', [Question::class, 'DeleteQuestion'])->where('id', '[1-9]+');
Route::get('your_question', [Question::class, 'YourQuestion']);


// answere 
Route::post('new_answere', [Answere::class, 'CreateAnswere']);
Route::get('/delete_answere/{id}/{id_question}', [Answere::class, 'DeleteAnswere'])->where('id', '[1-9]+')->where('id_question', '[1-9]+');
Route::post('/edit_answere/{id}', [Answere::class, 'EditAnswere'])->where('id', '[1-9]+');


Route::get('/home', function() { 
    return redirect('/');
});






