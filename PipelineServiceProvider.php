<?php

namespace Satupersen\Pipeline;

use Satupersen\Contracts\Pipeline\Hub as PipelineHubContract;
use Satupersen\Contracts\Support\DeferrableProvider;
use Satupersen\Support\ServiceProvider;

class PipelineServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            PipelineHubContract::class, Hub::class
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            PipelineHubContract::class,
        ];
    }
}
