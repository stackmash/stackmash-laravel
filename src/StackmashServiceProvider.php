<?php

namespace Stackmash\StackmashLaravel;

use Illuminate\Support\ServiceProvider;

use Stackmash\Stackmash;
use Stackmash\StackmashProject;

class StackmashServiceProvider extends ServiceProvider
{
	protected $defer = true;

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('Stackmash', function($app)
		{
			return new StackmashProject($app['config']['stackmash']['public_key'], $app['config']['stackmash']['private_key'], $app['config']['stackmash']);
		});

		$this->app->alias('Stackmash', StackmashProject::class);

		$this->mergeConfigFrom(__DIR__ . '/../config/stackmash.php', 'stackmash');
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		if($this->app->runningInConsole())
		{
			$this->publishes([
				__DIR__ . '/../config/stackmash.php' => config_path('stackmash.php'),
			], 'config');
		}
	}

	public function provides()
	{
		return ['Stackmash', StackmashProject::class];
	}
}