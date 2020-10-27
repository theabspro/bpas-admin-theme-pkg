<?php

namespace Abs\BpasAdminThemePkg;

use Illuminate\Support\ServiceProvider;

class BpasAdminThemePkgServiceProvider extends ServiceProvider {
	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register() {
		$this->loadViewsFrom(__DIR__ . '/views', 'bpas-admin-theme-pkg');
		$this->publishes([
			__DIR__ . '/public' => base_path('public'),
			__DIR__ . '/config/config.php' => config_path('bpas-admin-theme-pkg.php'),
		]);
	}

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot() {
	}
}
