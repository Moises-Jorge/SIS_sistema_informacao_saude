<?php

use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\AlergiaController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\DiagnosticoController;
use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\ExameController;
use App\Http\Controllers\PessoalAdminController;
use App\Http\Controllers\PessoalClinicoController;
use App\Http\Controllers\RegClinicoUtenteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * Conjunto de rotas referentes ao "User"
 */
Route::prefix("user")->group(function(){
    Route::get("/index",[UserController::class, 'index'])->name("user.index");
    Route::get("/create",[UserController::class, 'create'])->name("user.create");
    Route::post("/store",[UserController::class, 'store'])->name("user.store");
    Route::get("/show/{id}",[UserController::class, 'show'])->name("user.show");
    Route::get("/edit/{id}",[UserController::class, 'edit'])->name("user.edit");
    Route::post("/update/{id}",[UserController::class, 'update'])->name("user.update");
    Route::get("/destroy/{id}",[UserController::class, 'destroy'])->name("user.destroy");
});

/**
 * Conjunto de rotas referentes ao "Registro Clinico do Utente"
 */
Route::prefix("rcu")->group(function(){
    Route::get("/index", [RegClinicoUtenteController::class, 'index'])->name("rcu.index");
    Route::get("/create", [RegClinicoUtenteController::class, 'create'])->name("create");
    Route::post("/store", [RegClinicoUtenteController::class, 'store'])->name("store");
    Route::get("/show/{id}", [RegClinicoUtenteController::class, 'show'])->name("show");
    Route::get("/edit/{id}", [RegClinicoUtenteController::class, 'edit'])->name("edit");
    Route::post("/update/{id}", [RegClinicoUtenteController::class, 'update'])->name("update");
    Route::get("/destroy/{id}", [RegClinicoUtenteController::class, 'destroy'])->name("destroy");
});

/**
 * Conjunto de rotas referentes ao "Pessoal Clinico"
 */
Route::prefix("clinico")->group(function(){
    Route::get("/index", [PessoalClinicoController::class, 'index'])->name("index");
    Route::get("/create", [PessoalClinicoController::class, 'create'])->name("create");
    Route::post("/store", [PessoalClinicoController::class, 'store'])->name("store");
    Route::get("/show/{id}", [PessoalClinicoController::class, 'show'])->name("show");
    Route::get("/edit/{id}", [PessoalClinicoController::class, 'edit'])->name("edit");
    Route::post("/update/{id}", [PessoalClinicoController::class, 'update'])->name("update");
    Route::get("/destroy/{id}", [PessoalClinicoController::class, 'destroy'])->name("destroy");
});

/**
 * Conjunto de rotas referentes ao "Pessoal Administrativo"
 */
Route::prefix("admin")->group(function(){
    Route::get("/index", [PessoalAdminController::class, 'index'])->name("index");
    Route::get("/create", [PessoalAdminController::class, 'create'])->name("create");
    Route::post("/store", [PessoalAdminController::class, 'store'])->name("store");
    Route::get("/show/{id}", [PessoalAdminController::class, 'show'])->name("show");
    Route::get("/edit/{id}", [PessoalAdminController::class, 'edit'])->name("edit");
    Route::post("/update/{id}", [PessoalAdminController::class, 'update'])->name("update");
    Route::get("/destroy/{id}", [PessoalAdminController::class, 'destroy'])->name("destroy");
});

/**
 * Conjunto de rotas referentes aos "Exames"
 */
Route::prefix("exame")->group(function(){
    Route::get("/index", [ExameController::class, 'index'])->name("index");
    Route::get("/create", [ExameController::class, 'create'])->name("create");
    Route::post("/store", [ExameController::class, 'store'])->name("store");
    Route::get("/show/{id}", [ExameController::class, 'show'])->name("show");
    Route::get("/edit/{id}", [ExameController::class, 'edit'])->name("edit");
    Route::post("/update/{id}", [ExameController::class, 'update'])->name("update");
    Route::get("/destroy/{id}", [ExameController::class, 'destroy'])->name("destroy");
});

/**
 * Conjunto de rotas referentes a "Especialidade"
 */
Route::prefix("especialidade")->group(function(){
    Route::get("/index", [EspecialidadeController::class, 'index'])->name("index");
    Route::get("/create", [EspecialidadeController::class, 'create'])->name("create");
    Route::post("/store", [EspecialidadeController::class, 'store'])->name("store");
    Route::get("/show/{id}", [EspecialidadeController::class, 'show'])->name("show");
    Route::get("/edit/{id}", [EspecialidadeController::class, 'edit'])->name("edit");
    Route::post("/update/{id}", [EspecialidadeController::class, 'update'])->name("update");
    Route::get("/destroy/{id}", [EspecialidadeController::class, 'destroy'])->name("destroy");
});

/**
 * Conjunto de rotas referentes aos "Diagnosticos"
 */
Route::prefix("diagnostico")->group(function(){
    Route::get("/index", [DiagnosticoController::class, 'index'])->name("index");
    Route::get("/create", [DiagnosticoController::class, 'create'])->name("create");
    Route::post("/store", [DiagnosticoController::class, 'store'])->name("store");
    Route::get("/show/{id}", [DiagnosticoController::class, 'show'])->name("show");
    Route::get("/edit/{id}", [DiagnosticoController::class, 'edit'])->name("edit");
    Route::post("/update/{id}", [DiagnosticoController::class, 'update'])->name("update");
    Route::get("/destroy/{id}", [DiagnosticoController::class, 'destroy'])->name("destroy");
});


/**
 * Conjunto de rotas referentes a "Consultas"
 */
Route::prefix("consulta")->group(function(){
    Route::get("/index", [ConsultaController::class, 'index'])->name("index");
    Route::get("/create", [ConsultaController::class, 'create'])->name("create");
    Route::post("/store", [ConsultaController::class, 'store'])->name("store");
    Route::get("/show/{id}", [ConsultaController::class, 'show'])->name("show");
    Route::get("/edit/{id}", [ConsultaController::class, 'edit'])->name("edit");
    Route::post("/update/{id}", [ConsultaController::class, 'update'])->name("update");
    Route::get("/destroy/{id}", [ConsultaController::class, 'destroy'])->name("destroy");
});

/**
 * Conjunto de rotas referentes a "Alergias"
 */
Route::prefix("alergia")->group(function(){
    Route::get("/index", [AlergiaController::class, 'index'])->name("index");
    Route::get("/create", [AlergiaController::class, 'create'])->name("create");
    Route::post("/store", [AlergiaController::class, 'store'])->name("store");
    Route::get("/show/{id}", [AlergiaController::class, 'show'])->name("show");
    Route::get("/edit/{id}", [AlergiaController::class, 'edit'])->name("edit");
    Route::post("/update/{id}", [AlergiaController::class, 'update'])->name("update");
    Route::get("/destroy/{id}", [AlergiaController::class, 'destroy'])->name("destroy");
});

/**
 * Conjunto de rotas referentes ao "Agendamento"
 */
Route::prefix("agendamento")->group(function(){
    Route::get("/index", [AgendamentoController::class, 'index'])->name("index");
    Route::get("/create", [AgendamentoController::class, 'create'])->name("create");
    Route::post("/store", [AgendamentoController::class, 'store'])->name("store");
    Route::get("/show/{id}", [AgendamentoController::class, 'show'])->name("show");
    Route::get("/edit/{id}", [AgendamentoController::class, 'edit'])->name("edit");
    Route::post("/update/{id}", [AgendamentoController::class, 'update'])->name("update");
    Route::get("/destroy/{id}", [AgendamentoController::class, 'destroy'])->name("destroy");
});
