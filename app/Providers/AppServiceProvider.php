<?php

namespace App\Providers;

use App\Models\PegawaiData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Laravel\Pulse\Facades\Pulse;

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
        Gate::define('viewPulse', function (PegawaiData $user) {
            return Auth::user()->role == 'admin';
        });

        Pulse::user(fn ($user) => [
            'name' => $user->nama,
            'extra' => $user->nik_admedika,
        ]);
    }
}
