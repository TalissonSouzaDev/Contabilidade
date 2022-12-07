<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{EmpresaController,InstituicaoController,ContatoController,SiteController,FuncionarioController,UserController};


Route::get('/teste', function () {
    return view('contabilidade.header.index');
});

Route::prefix('contabilidade')->middleware('auth')->group(function(){

    /*
Rotas da empresas
*/
Route::any('/empresa',[EmpresaController::class,'index'])->name('empresa.index');
Route::get('/empresa/create/cadastro',[EmpresaController::class,'create'])->name('empresa.create');
Route::post('/empresa/store/create',[EmpresaController::class,'store'])->name('empresa.store');
Route::get('/empresa/show/{id}',[EmpresaController::class,'show'])->name('empresa.show');
Route::get('/empresa/edit/{id}',[EmpresaController::class,'edit'])->name('empresa.edit');
Route::put('/empresa/update/{id}',[EmpresaController::class,'update'])->name('empresa.update');
Route::delete('/empresa/destroy/{id}',[EmpresaController::class,'destroy'])->name('empresa.destroy');


/*
Rotas da instituição
*/
Route::any('/instituicao',[InstituicaoController::class,'index'])->name('instituicao.index');
Route::get('/instituicao/create/cadastro',[InstituicaoController::class,'create'])->name('instituicao.create');
Route::post('/instituicao/store/create',[InstituicaoController::class,'store'])->name('instituicao.store');

Route::get('/instituicao/edit/{id}',[InstituicaoController::class,'edit'])->name('instituicao.edit');
Route::put('/instituicao/update/{id}',[InstituicaoController::class,'update'])->name('instituicao.update');
Route::delete('/instituicao/destroy/{id}',[InstituicaoController::class,'destroy'])->name('instituicao.destroy');


/*
Rotas da contatos
*/
Route::any('/contato/',[ContatoController::class,'index'])->name('contato.index');
Route::get('/contato/create/cadastro',[ContatoController::class,'create'])->name('contato.create');
Route::post('/contato/store/create',[ContatoController::class,'store'])->name('contato.store');
Route::get('/contato/show/{id}',[ContatoController::class,'show'])->name('contato.show');
Route::get('/contato/edit/{id}',[ContatoController::class,'edit'])->name('contato.edit');
Route::put('/contato/update/{id}',[ContatoController::class,'update'])->name('contato.update');
Route::delete('/contato/destroy/{id}',[ContatoController::class,'destroy'])->name('contato.destroy');


/*
Rotas da site
*/
Route::any('/site/',[SiteController::class,'index'])->name('site.index');
Route::get('/site/create/cadastro',[SiteController::class,'create'])->name('site.create');
Route::post('/site/store/create',[SiteController::class,'store'])->name('site.store');
Route::get('/site/edit/{id}',[SiteController::class,'edit'])->name('site.edit');
Route::put('/site/update/{id}',[SiteController::class,'update'])->name('site.update');
Route::delete('/site/destroy/{id}',[SiteController::class,'destroy'])->name('site.destroy');


/*
Rotas da funcionario
*/
Route::any('/funcionario/{idempresa}/empresa',[FuncionarioController::class,'index'])->name('funcionario.index');
Route::get('/funcionario/create/{idempresa}/cadastro',[FuncionarioController::class,'create'])->name('funcionario.create');
Route::post('/funcionario/store/create/empresa/{idempresa}',[FuncionarioController::class,'store'])->name('funcionario.store');
Route::get('/funcionario/show/{id}/empresa/{idempresa}',[FuncionarioController::class,'show'])->name('funcionario.show');
Route::get('/funcionario/edit/{id}/empresa/{idempresa}',[FuncionarioController::class,'edit'])->name('funcionario.edit');
Route::put('/funcionario/update/{id}/empresa/{idempresa}',[FuncionarioController::class,'update'])->name('funcionario.update');
Route::delete('/funcionario/destroy/{id}/empresa/{idempresa}',[FuncionarioController::class,'destroy'])->name('funcionario.destroy');



/*
Rotas da user
*/


Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::put('/user/update/{id}',[UserController::class,'update'])->name('user.update');


/*
Rotas da HOME
*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


/*
Rotas de login
*/
Auth::routes();


/*
Rotas de fallback
*/
Route::fallback(function(){
    return redirect()->route('login');
});
