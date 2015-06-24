<?php namespace AdenFraser\ClearBeanstalkdQueue;

use Illuminate\Support\ServiceProvider;

class ClearBeanstalkdQueueServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['coandawebforms.clearbeanslakdqueue'] = $this->app->share(function($app)
        {
            return new \CoandaCMS\CoandaWebForms\Artisan\ClearBeanstalkdQueueCommand($app);
        });

        $this->commands('coandawebforms.clearbeanslakdqueue');
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

}
