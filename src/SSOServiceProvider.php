<?php

namespace andcarpi\LaravelSSOBroker;

use Illuminate\Support\ServiceProvider;
use andcarpi\LaravelSSOBroker\Commands;

class SSOServiceProvider extends ServiceProvider
{
    /**
     * Configuration file name.
     *
     * @var string
     */
    protected $configFileName = 'laravel-sso-broker.php';

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishConfig(__DIR__ . '/../config/' . $this->configFileName);

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Get the config path
     *
     * @return string
     */
    protected function getConfigPath()
    {
        return config_path($this->configFileName);
    }

    /**
     * Publish the config file
     *
     * @param string $configPath
     */
    protected function publishConfig(string $configPath)
    {
        $this->publishes([$configPath => $this->getConfigPath()]);
    }

}
