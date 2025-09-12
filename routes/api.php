<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\MembroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post ('/autor', [AutorController::class, 'store']);

Route::get ('/autor', [AutorController::class, 'index']);

Route::post ('/livro', [LivroController::class, 'store']);

Route::get ('/livro', [LivroController::class, 'index']);

Route::post ('/membro', [MembroController::class, 'store']);

Route::get ('/membro', [MembroController::class, 'index']);

Route::post ('/emprestimo', [EmprestimoController::class, 'store']);

Route::get ('/emprestimo', [EmprestimoController::class, 'index']);