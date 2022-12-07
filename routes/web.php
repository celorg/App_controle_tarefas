<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;
use App\Mail\MensagemTesteMail;

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

Route::get('/', function () {
    return view('bem-vindo');
});

Auth::routes(['verify'=>true]);
/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('verified');
*/

Route::get('tarefa/exportacao/{extensao}',[\App\Http\Controllers\TarefaController::class, 'exportacao'])->name('tarefa.exportacao');

Route::resource('tarefa', TarefaController::class)->middleware('verified');

Route::get('/mensagem-teste', function(){
    return new MensagemTesteMail();
    // Mail::to('marcelo.ribeiro.gomes@hotmail.com')->send(new MensagemTesteMail());
    // return 'Email enviado com sucesso';
});
