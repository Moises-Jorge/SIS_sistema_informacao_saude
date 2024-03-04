<?php

use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\AlergiaController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DiagnosticoController;
use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\ExameController;
use App\Http\Controllers\login;
use App\Http\Controllers\Menu;
use App\Http\Controllers\PessoalAdminController;
use App\Http\Controllers\PessoalClinicoController;
use App\Http\Controllers\ReceitaController;
use App\Http\Controllers\RegClinicoUtenteController;
use App\Http\Controllers\UserController;
use App\Models\Diagnostico;
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

Route::middleware('throttle:50,1')->group(function () {
    Route::prefix("index")->group(function(){
        Route::get("/home",[Controller::class, 'home'])->name("index.home");
    });
    
    Route::prefix("prescricao")->group(function(){
        Route::get("/index",[ReceitaController::class, 'index'])->name("prescricao.index");
        Route::get("/create",[ReceitaController::class, 'create'])->name("prescricao.create");
        Route::post("/store",[ReceitaController::class, 'store'])->name("prescricao.store")->middleware('xss');
        Route::get("/show/{id}",[ReceitaController::class, 'show'])->name("prescricao.show");
        Route::get("/edit/{id}",[ReceitaController::class, 'edit'])->name("prescricao.edit");
        Route::post("/update/{id}",[ReceitaController::class, 'update'])->name("prescricao.update")->middleware('xss');
        Route::get("/destroy/{id}",[ReceitaController::class, 'destroy'])->name("prescricao.destroy");
    });
    
    Route::get('/', function () {
        return view('site.index');
    });
    
    
    
    Route::get('/perfil', function () {
        return view('site/admin/profile');
    });
    
    
    Route::prefix("login")->group(function(){
        Route::get("/page",[login::class, 'login'])->name("login.page");
        Route::post("/logar",[login::class, 'logar'])->name("login.logar")->middleware('xss');
        Route::get("/logout",[login::class, 'logout'])->name("login.logout");
        Route::get("/recover_password", [login::class, 'recover_password'])->name("login.recover_password");
    });
    
    
    
    Route::middleware('auth:sanctum')->prefix("menu")->group(function(){
        Route::get("/index",[Menu::class, 'index'])->name("menu.index");
        Route::get("/profile", [Menu::class, 'profile'])->name("menu.profile");
    });
    
    
    /**
     * Conjunto de rotas referentes ao "User"
     * middleware('auth:sanctum')->
     */
    
    Route::prefix("user")->group(function(){
        Route::get("/index",[UserController::class, 'index'])->name("user.index");
        Route::get("/create",[UserController::class, 'create'])->name("user.create");
        Route::post("/store",[UserController::class, 'store'])->name("user.store")->middleware('xss');
        Route::get("/show/{id}",[UserController::class, 'show'])->name("user.show");
        Route::get("/edit/{id}",[UserController::class, 'edit'])->name("user.edit");
        Route::post("/update/{id}",[UserController::class, 'update'])->name("user.update")->middleware('xss');
        Route::get("/destroy/{id}",[UserController::class, 'destroy'])->name("user.destroy");
    });
    
    /**
     * Conjunto de rotas referentes ao "Registro Clinico do Utente"
     */
    Route::middleware('auth:sanctum')->prefix("rcu")->group(function(){
        Route::get("/index", [RegClinicoUtenteController::class, 'index'])->name("rcu.index");
        Route::get("/create", [RegClinicoUtenteController::class, 'create'])->name("rcu.create");
        Route::post("/store", [RegClinicoUtenteController::class, 'store'])->name("rcu.store")->middleware('xss');
        Route::get("/show/{id}", [RegClinicoUtenteController::class, 'show'])->name("rcu.show");
        Route::get("/edit/{id}", [RegClinicoUtenteController::class, 'edit'])->name("rcu.edit");
        Route::post("/update/{id}", [RegClinicoUtenteController::class, 'update'])->name("rcu.update")->middleware('xss');
        Route::get("/destroy/{id}", [RegClinicoUtenteController::class, 'destroy'])->name("rcu.destroy");
    });
    
    /**
     * Conjunto de rotas referentes ao "Pessoal Clinico"
     */
    Route::middleware('auth:sanctum')->prefix("clinico")->group(function(){
        Route::get("/index", [PessoalClinicoController::class, 'index'])->name("clinico.index");
        Route::get("/create", [PessoalClinicoController::class, 'create'])->name("clinico.create");
        Route::post("/store", [PessoalClinicoController::class, 'store'])->name("clinico.store")->middleware('xss');
        Route::get("/show/{id}", [PessoalClinicoController::class, 'show'])->name("clinico.show");
        Route::get("/edit/{id}", [PessoalClinicoController::class, 'edit'])->name("clinico.edit");
        Route::post("/update/{id}", [PessoalClinicoController::class, 'update'])->name("clinico.update")->middleware('xss');
        Route::get("/destroy/{id}", [PessoalClinicoController::class, 'destroy'])->name("clinico.destroy");
    });
    
    /**
     * Conjunto de rotas referentes ao "Pessoal Administrativo"
     */
    Route::middleware('auth:sanctum')->prefix("admin")->group(function(){
        Route::get("/index", [PessoalAdminController::class, 'index'])->name("admin.index");
        Route::get("/create", [PessoalAdminController::class, 'create'])->name("admin.create");
        Route::post("/store", [PessoalAdminController::class, 'store'])->name("admin.store")->middleware('xss');
        Route::get("/show/{id}", [PessoalAdminController::class, 'show'])->name("admin.show");
        Route::get("/edit/{id}", [PessoalAdminController::class, 'edit'])->name("admin.edit");
        Route::post("/update/{id}", [PessoalAdminController::class, 'update'])->name("admin.update")->middleware('xss');
        Route::get("/destroy/{id}", [PessoalAdminController::class, 'destroy'])->name("admin.destroy");
    });
    
    /**
     * Conjunto de rotas referentes aos "Exames"
     */
    Route::prefix("exame")->group(function(){
        Route::get("/index", [ExameController::class, 'index'])->name("exame.index");
        Route::middleware('auth:sanctum')->get("/create", [ExameController::class, 'create'])->name("exame.create");
        Route::middleware('auth:sanctum')->post("/store", [ExameController::class, 'store'])->name("exame.store")->middleware('xss');
        Route::middleware('auth:sanctum')->get("/show/{id}", [ExameController::class, 'show'])->name("exame.show");
        Route::middleware('auth:sanctum')->get("/edit/{id}", [ExameController::class, 'edit'])->name("exame.edit");
        Route::middleware('auth:sanctum')->post("/update/{id}", [ExameController::class, 'update'])->name("exame.update")->middleware('xss');
        Route::middleware('auth:sanctum')->get("/destroy/{id}", [ExameController::class, 'destroy'])->name("exame.destroy");
    });
    
    /**
     * Conjunto de rotas referentes a "Especialidade"
     */
    Route::prefix("especialidade")->group(function(){
        Route::get("/index", [EspecialidadeController::class, 'index'])->name("especialidade.index");
        Route::middleware('auth:sanctum')->get("/create", [EspecialidadeController::class, 'create'])->name("especialidade.create");
        Route::middleware('auth:sanctum')->post("/store", [EspecialidadeController::class, 'store'])->name("especialidade.store")->middleware('xss');
        Route::middleware('auth:sanctum')->get("/show/{id}", [EspecialidadeController::class, 'show'])->name("especialidade.show");
        Route::middleware('auth:sanctum')->get("/edit/{id}", [EspecialidadeController::class, 'edit'])->name("especialidade.edit");
        Route::middleware('auth:sanctum')->post("/update/{id}", [EspecialidadeController::class, 'update'])->name("especialidade.update")->middleware('xss');
        Route::middleware('auth:sanctum')->get("/destroy/{id}", [EspecialidadeController::class, 'destroy'])->name("especialidade.destroy");
    });
    
    /**
     * Conjunto de rotas referentes aos "Diagnosticos"
     */
    Route::middleware('auth:sanctum')->prefix("diagnostico")->group(function(){
        Route::get("/index", [DiagnosticoController::class, 'index'])->name("diagnostico.index");
        Route::get("/create", [DiagnosticoController::class, 'create'])->name("diagnostico.create");
        Route::post("/store", [DiagnosticoController::class, 'store'])->name("diagnostico.store")->middleware('xss');
        Route::get("/show/{id}", [DiagnosticoController::class, 'show'])->name("diagnostico.show");
        Route::get("/edit/{id}", [DiagnosticoController::class, 'edit'])->name("diagnostico.edit");
        Route::post("/update/{id}", [DiagnosticoController::class, 'update'])->name("diagnostico.update")->middleware('xss');
        Route::get("/destroy/{id}", [DiagnosticoController::class, 'destroy'])->name("diagnostico.destroy");
    });
    
    
    /**
     * Conjunto de rotas referentes a "Consultas"
     */
    Route::prefix("consulta")->group(function(){
        Route::get("/index", [ConsultaController::class, 'index'])->name("consulta.index");
        Route::middleware('auth:sanctum')->get("/create", [ConsultaController::class, 'create'])->name("consulta.create");
        Route::middleware('auth:sanctum')->post("/store", [ConsultaController::class, 'store'])->name("consulta.store")->middleware('xss');
        Route::middleware('auth:sanctum')->get("/show/{id}", [ConsultaController::class, 'show'])->name("consulta.show");
        Route::middleware('auth:sanctum')->get("/edit/{id}", [ConsultaController::class, 'edit'])->name("consulta.edit");
        Route::middleware('auth:sanctum')->post("/update/{id}", [ConsultaController::class, 'update'])->name("consulta.update")->middleware('xss');
        Route::middleware('auth:sanctum')->get("/destroy/{id}", [ConsultaController::class, 'destroy'])->name("consulta.destroy");
    });
    
    /**
     * Conjunto de rotas referentes a "Alergias"
     */
    Route::prefix("alergia")->group(function(){
        Route::get("/index", [AlergiaController::class, 'index'])->name("alergia.index");
        Route::middleware('auth:sanctum')->get("/create", [AlergiaController::class, 'create'])->name("alergia.create");
        Route::middleware('auth:sanctum')->post("/store", [AlergiaController::class, 'store'])->name("alergia.store")->middleware('xss');
        Route::middleware('auth:sanctum')->get("/show/{id}", [AlergiaController::class, 'show'])->name("alergia.show");
        Route::middleware('auth:sanctum')->get("/edit/{id}", [AlergiaController::class, 'edit'])->name("alergia.edit");
        Route::middleware('auth:sanctum')->post("/update/{id}", [AlergiaController::class, 'update'])->name("alergia.update")->middleware('xss');
        Route::middleware('auth:sanctum')->get("/destroy/{id}", [AlergiaController::class, 'destroy'])->name("alergia.destroy");
    });
    
    /**
     * Conjunto de rotas referentes ao "Agendamento"
     */
    Route::middleware('auth:sanctum')->prefix("agendamento")->group(function(){
        Route::get("/index", [AgendamentoController::class, 'index'])->name("agendamento.index");
        Route::get("/create", [AgendamentoController::class, 'create'])->name("agendamento.create");
        Route::post("/store", [AgendamentoController::class, 'store'])->name("agendamento.store")->middleware('xss');
        Route::get("/show/{id}", [AgendamentoController::class, 'show'])->name("agendamento.show");
        Route::get("/edit/{id}", [AgendamentoController::class, 'edit'])->name("agendamento.edit");
        Route::post("/update/{id}", [AgendamentoController::class, 'update'])->name("agendamento.update")->middleware('xss');
        Route::get("/destroy/{id}", [AgendamentoController::class, 'destroy'])->name("agendamento.destroy");
    });
    
});
