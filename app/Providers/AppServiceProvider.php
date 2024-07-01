<?php

namespace App\Providers;

use App\Models\PegawaiData;
use Carbon\Carbon;
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
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');

        Gate::define('viewPulse', function (PegawaiData $user) {
            return Auth::user()->role == 'admin';
        });

        Pulse::user(fn ($user) => [
            'name' => $user->nama,
            'extra' => $user->nik_admedika,
        ]);
    }
}
