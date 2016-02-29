<?php

namespace App\Providers;

use Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* @define($foo = 'bar') */
        Blade::directive('define', function ($expression) {
            return preg_replace('/\@define(.+)/', '<?php ${1}; ?>', $expression);
        });

        /* @datetime($var) */
        Blade::directive('datetime', function ($expression) {
            return "<?php echo with{$expression}->format('d/m/Y H:i'); ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
