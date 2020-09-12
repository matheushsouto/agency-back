<?php

namespace Modules\Booking\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/**
 * Class RegisterServiceProvider
 *
 * A clase estende ServiceProvider
 * @package ServiceProvider
 *
 */
class BookingServiceProvider extends ServiceProvider{

    protected $namespace = 'Modules\Booking\Http\Controllers';

     /**
     * Executa na inicialização do sistema.
     *
     */
    public function boot()
    {
        $this->mapRoutes();
    }

     /**
     * Criação de grupo de rotas protegidas.
     *
     * @internal Seta o prefixo da rota.
     *
     */
    public function mapRoutes()
    {
        Route::prefix('v1/')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(__DIR__.'/../Routes/route.php');

    }

}
