<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Requests\EmpresaStoreRequest;
use App\Http\Requests\EmpresaUpdateRequest;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    
    public function index()
    {
        $empresas = Empresa::all();
        return ApiResponse::success("Lista Empresas", $empresas);
    }

    public function store(EmpresaStoreRequest $request)
    {
        $empresa = Empresa::create($request->validated());
        return ApiResponse::success("EmpresaCadastrada com sucesso!", $empresa, 201);
    }

    public function show(string $id)
    {
        $empresa = Empresa::findOrFail($id);
        return ApiResponse::success("Empresa", $empresa);
    }

    public function update(EmpresaUpdateRequest $request, string $id)
    {
        $empresa = Empresa::findOrFail($id);

        $empresa->update($request->validated());

        return ApiResponse::success("Empresa atualizada com sucesso!", $empresa);
    }

    public function destroy(string $id)
    {
        $empresa = Empresa::findOrFail($id);

        $empresa->delete();

        return ApiResponse::success("Empresa excluída com sucesso!", null);
    }
}
