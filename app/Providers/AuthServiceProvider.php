<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Enums\TipoPerfil;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::before(fn () => Auth::user()->hasPerfil(TipoPerfil::Admin) ? true : null);

        Gate::define('servidor', fn() => Auth::user()->hasPerfil(TipoPerfil::Servidor));

        Gate::define('protocolo',  fn() => Auth::user()->hasPerfil(TipoPerfil::Protocolo));

        Gate::define('copad',  fn() => Auth::user()->hasPerfil(TipoPerfil::Copad));
    }
}
