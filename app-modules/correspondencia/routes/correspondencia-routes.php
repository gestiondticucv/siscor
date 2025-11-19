<?php

use Modules\Correspondencia\Http\Controllers\CorrespondenciaController;

// Route::get('/correspondencias', [CorrespondenciaController::class, 'index'])->name('correspondencias.index');
// Route::get('/correspondencias/create', [CorrespondenciaController::class, 'create'])->name('correspondencias.create');
// Route::post('/correspondencias', [CorrespondenciaController::class, 'store'])->name('correspondencias.store');
// Route::get('/correspondencias/{correspondencium}', [CorrespondenciaController::class, 'show'])->name('correspondencias.show');
// Route::get('/correspondencias/{correspondencium}/edit', [CorrespondenciaController::class, 'edit'])->name('correspondencias.edit');
// Route::put('/correspondencias/{correspondencium}', [CorrespondenciaController::class, 'update'])->name('correspondencias.update');
// Route::delete('/correspondencias/{correspondencium}', [CorrespondenciaController::class, 'destroy'])->name('correspondencias.destroy');

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get ('/correspondencias', [CorrespondenciaController::class, 'index'])->name('correspondencia.index');

Route::get('/usuarios', function () {
    return Inertia::render('Users', [
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});