<?php
namespace timschwartz\Permissions;

use Illuminate\Support\ServiceProvider;

class PermissionsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
               __DIR__.'/database/migrations/' => database_path('migrations')
               ], 'migrations');
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
