<?php
 
namespace Faiznurullah\Portal;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Faiznurullah\Portal\Portalpulsa;

class PortalpulsaServiceProvider extends ServiceProvider
{

    public function boot()
    {
          
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . './config/config.php', 'portalpulsa');

        $this->app->singleton('portalpulsa', function () {
            return new Portalpulsa(Config::get('portalpulsa.PORTAL_KEY'), Config::get('portalpulsa.PORTAL_SECRET'), Config::get('portalpulsa.PORTAL_USER_ID'));
        });
    }
}