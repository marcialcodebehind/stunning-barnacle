<?php

namespace Modules\Setting\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Modules\Setting\Entities\Setting;
use Modules\Setting\Facades\Settings as SettingsFacade;
use Modules\Setting\Repositories\Eloquent\EloquentSettingRepository;
use Modules\Setting\Repositories\SettingRepository;
use Modules\Setting\Support\Settings;


class SettingServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();

        $this->app->singleton('setting.settings', function ($app) {
           return new Settings($app[SettingRepository::class]);
        });
        $loader = AliasLoader::getInstance();
        $loader->alias('Settings', SettingsFacade::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('setting.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'setting'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = base_path('resources/views/modules/setting');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ]);

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/setting';
        }, \Config::get('view.paths')), [$sourcePath]), 'setting');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = base_path('resources/lang/modules/setting');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'setting');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'setting');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    private function registerBindings()
    {
        $this->app->bind(SettingRepository::class, function () {
            $repository = new EloquentSettingRepository(new Setting());

            return $repository;
        });
        $this->app->bind(
            \Modules\Core\Contracts\Setting::class,
            Settings::class
        );
    }
}
