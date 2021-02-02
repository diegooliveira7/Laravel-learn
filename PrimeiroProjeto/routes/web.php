<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\adm\CidadeController;
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
    return view('welcome');
});
Route::prefix('admin')->group(function(){//Essa é uma forma de agrupar rotas que tem uma base comum, nesse caso é a palavra cidade
    Route::get('/cidade', [CidadeController::class, 'cidades'])->name('listaCidades');//o name serve para dar nomes as rotas
    Route::get('cidade/add', [CidadeController::class, 'formAdd'/*Nome do método lá no controlador*/])->name('formAdd');
    Route::post('cidade/add', [CidadeController::class, 'adicionar'])->name('addCidade');/**/
});


Route::get('/dia', function () {
    return view('cidades');
});
