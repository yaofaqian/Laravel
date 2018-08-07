<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    protected $frontendNamespace = 'App\Http\Controllers\Frontend';//前端
    protected $backendNamespace = 'App\Http\Controllers\Backend';//管理后台
    protected $apiNamespace = 'App\Http\Controllers\Api';//API


    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        //$this->mapApiRoutes();
        if(isset($_SERVER['HTTP_HOST'])){
            $sld_prefix = explode('.',$_SERVER['HTTP_HOST'])[0];
            if($sld_prefix == 'admin'){
                $this->mapBackendRoutes();
            }elseif($sld_prefix == 'homestead'){
                $this->mapFrontendRoutes();
            }elseif($sld_prefix == 'api'){
                $this->mapApiRoutes();
            }
        }
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }


    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->apiNamespace)
            ->group(base_path('routes/api.php'));
    }
    /**
     * 管理后台
     */
    protected function mapBackendRoutes()
    {
        Route::middleware('web')
            ->namespace($this->backendNamespace)
            ->group(base_path('routes/backend.php'));
    }

    /**
     * PC端
     */
    protected function mapFrontendRoutes()
    {
        Route::middleware('web')
            ->namespace($this->frontendNamespace)
            ->group(base_path('routes/frontend.php'));
    }
}
