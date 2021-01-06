<?php

namespace BlkSheepIo\LaravelAuth;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		// Merge configurations
		$this->mergeConfigFrom(
			__DIR__.'/../config/blkauth.php', 'blkauth'
		);
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		// Add middleware
		$kernel = $this->app->make(Kernel::class);
		$kernel->pushMiddleware(Middleware::class);

		// Publish files
		$this->publishes([
			__DIR__.'/../config/blkauth.php' => config_path('blkauth.php'),
		], 'config');
	}
}