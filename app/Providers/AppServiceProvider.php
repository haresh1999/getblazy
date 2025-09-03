<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if (config('app.env') === 'production') {
            
            URL::forceScheme('https');
        }

        if (Schema::hasTable('settings')) {

            $setting = DB::table('settings')
                ->where('env', env('APP_ENV'))
                ->pluck('value', 'slug')
                ->toArray();

            Config::set('services.general', $setting);

            Config::set([
                'mail.default' => Config::get('services.general.mail_default'),
                'mail.mailers.smtp.host' => Config::get('services.general.mail_host'),
                'mail.mailers.smtp.port' => Config::get('services.general.mail_port'),
                'mail.mailers.smtp.encryption' => Config::get('services.general.mail_encryption'),
                'mail.mailers.smtp.username' => Config::get('services.general.mail_username'),
                'mail.mailers.smtp.password' => Config::get('services.general.mail_password'),
                'mail.from.address' => Config::get('services.general.mail_address'),
                'mail.from.name' => Config::get('services.general.mail_name'),
            ]);
        }
    }
}
