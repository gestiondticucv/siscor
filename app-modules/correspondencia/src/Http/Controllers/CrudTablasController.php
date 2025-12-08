<?php

namespace Modules\Correspondencia\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Correspondencia\Services\TiposService;
use Modules\Correspondencia\Services\CategoriasService;
use Modules\Correspondencia\Services\EstatusService;
use Modules\Correspondencia\Http\Requests\TipoRequest;
use Modules\Correspondencia\Http\Requests\CategoriaRequest;
use Modules\Correspondencia\Http\Requests\EstatusRequest;

class CrudTablasController
{
    public function __construct(
        private TiposService $tiposService,
        private CategoriasService $categoriasService,
        private EstatusService $estatusService
    ) {}

// Métodos para manejar las operaciones CRUD utilizando los servicios

    // ------ TIPOS ------

    public function getTipos()
    {
        return $this->tiposService->getAllTipos();
    }

    public function getTipoById(int $id)
    {
        return $this->tiposService->getTipoById($id);
    }

    public function createTipo(TipoRequest $request)
    {
        return $this->tiposService->createTipo($request->validated());
    }

    public function updateTipo(int $id, TipoRequest $request)
    {
        return $this->tiposService->updateTipo($id, $request->validated());
    }

    public function deleteTipo(int $id)
    {
        return $this->tiposService->deleteTipo($id);
    }

    // ------ CATEGORIAS ------

    public function getCategorias()
    {
        return $this->categoriasService->getAllCategorias();
    }

    public function getCategoriaById(int $id)
    {
        return $this->categoriasService->getCategoriaById($id);
    }

    public function createCategoria(CategoriaRequest $request)
    {
        return $this->categoriasService->createCategoria($request->validated());
    }

    public function updateCategoria(int $id, CategoriaRequest $request)
    {
        return $this->categoriasService->updateCategoria($id, $request->validated());
    }

    public function deleteCategoria(int $id)
    {
        return $this->categoriasService->deleteCategoria($id);
    }

    // ------ ESTATUS ------

    public function getEstatus()
    {
        return $this->estatusService->getAllEstatus();
    }

    public function getEstatusById(int $id)
    {
        return $this->estatusService->getEstatusById($id);
    }

    public function createEstatus(EstatusRequest $request)
    {
        return $this->estatusService->createEstatus($request->validated());
    }

    public function updateEstatus(int $id, EstatusRequest $request)
    {
        return $this->estatusService->updateEstatus($id, $request->validated());
    }

    public function deleteEstatus(int $id)
    {
        return $this->estatusService->deleteEstatus($id);
    }
}
