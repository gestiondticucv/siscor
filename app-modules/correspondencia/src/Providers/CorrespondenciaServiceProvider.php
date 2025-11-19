<?php

namespace Modules\Correspondencia\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Route;


class CorrespondenciaServiceProvider extends ServiceProvider
{
	public function register(): void {}

	public function boot(): void
	{

		Route::middleware('web')
			->group(__DIR__ . '/../../routes/correspondencia-routes.php');
	}
}
