<?php

namespace App\Providers;

use Carbon\CarbonImmutable;
use Illuminate\Foundation\DevCommands;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configureDefaults();

        if (app()->runningInConsole()) {
            $projectRoot = base_path();
            $tempDirectory = storage_path('framework');

            DevCommands::register(
                PHP_BINARY.' -d upload_tmp_dir='.$tempDirectory.' -d sys_temp_dir='.$tempDirectory.' '.$projectRoot.'/artisan serve --host=127.0.0.1 --port=8000',
                'server',
            );
            DevCommands::register(
                'npm.cmd run dev -- --host 127.0.0.1 --strictPort',
                'vite',
            );
        }

        Gate::define('admin', function (User $user) {
            return $user->role === 'admin';
        });
    }

    /**
     * Configure default behaviors for production-ready applications.
     */
    protected function configureDefaults(): void
    {
        Date::use(CarbonImmutable::class);

        DB::prohibitDestructiveCommands(
            app()->isProduction(),
        );

        Password::defaults(fn (): ?Password => app()->isProduction()
            ? Password::min(12)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised()
            : null,
        );
    }
}
