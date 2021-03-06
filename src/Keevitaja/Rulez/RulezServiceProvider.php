<?php namespace Keevitaja\Rulez;

/**
* @author Tanel Tammik <keevitaja@gmail.com>
* @copyright Copyright (c) 2014
* @license http://www.opensource.org/licenses/mit-license.html MIT License
*/

use Illuminate\Support\ServiceProvider;

class RulezServiceProvider extends ServiceProvider {

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
		$this->package('keevitaja/rulez');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('rulez', 'Keevitaja\Rulez\Rulez');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}