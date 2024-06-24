<?php

namespace App\Providers;

use App\Models\User;
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
        Gate::define('viewPulse', function (User $user) {
            return Auth::user()->role == 'Pimpinan';
        });

        Pulse::user(fn ($user) => [
            'name' => $user->name,
            'extra' => $user->email,
        ]);
    }
}
