<?php 

namespace kelompok3\cv;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\ServiceProvider;

class CVServiceProvider extends ServiceProvider {
    public function boot() {
        $this -> loadRoutesFrom(__DIR__."/routes/web.php");
        $this -> loadViewsFrom(__DIR__."/views","cv");
        $this -> publishes([__DIR__. "/public"=>public_path('cvreq'),
        __DIR__. "/views" =>resource_path('views/cvview')    
    ],["laravel-assets"]);
    }
    public function register() {
    }
};