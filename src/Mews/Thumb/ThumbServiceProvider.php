<?php namespace Mews\Thumb;

use Illuminate\Support\ServiceProvider;

class ThumbServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * DEPRECATED - Bootstrap the application events.
	 *
	 * @return void
	 * 
	public function boot()
	{
		//$this->package('mews/thumb');

		$app = $this->app;

	    $this->app->finish(function() use ($app)
	    {

	    });
	}*/

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('thumb', function() {
            return new Thumb();
        });
    }
    
	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('thumb');
	}

}
