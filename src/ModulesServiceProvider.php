<?php

namespace Liemphan\modules;

use Illuminate\Support\ServiceProvider;

class ModulesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      $this->publishes([__DIR__.'/config/module.php' => config_path('module.php')], 'module_config');
      $this->publishes([__DIR__.'/Events' => base_path('app/Events')], 'module_event');
      $this->publishes([__DIR__.'/Modules' => base_path('app/Modules')], 'module');
      $this->publishes([__DIR__.'/Repositories' => base_path('app/Repositories')], 'module_repo');
      $this->publishes([__DIR__.'/resources/assets' => public_path('/assets')], 'module_assets');
      $this->publishes([__DIR__.'/resources/myLib' => base_path('/resources')], 'module_library');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
