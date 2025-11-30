<?php

use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;

  Route::get("/empresas",[EmpresaController::class,"index"]);
  Route::get("/empresas/{id}",[EmpresaController::class,"show"]);
  Route::post("/empresas",[EmpresaController::class,"store"]);
  Route::patch("/empresas/{id}",[EmpresaController::class,"update"]);
  Route::delete("/empresas/{id}",[EmpresaController::class,"destroy"]);
  