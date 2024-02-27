<?php

namespace Kobalt\LaravelDuskBladeDirective;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDuskBladeDirectiveServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-dusk-blade-directive')
            ->hasConfigFile();
    }

    public function boot()
    {
        parent::boot();

        Blade::directive(config('dusk-blade-directive.name'), function ($expression) {
            if (! app()->environment(config('dusk-blade-directive.environments'))) {
                return '';
            }

            return "<?php printf('dusk=\"%s\"',  $expression); ?>";
        });
    }
}
