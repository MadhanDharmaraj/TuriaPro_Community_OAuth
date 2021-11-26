<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;
use App\Passport\ClientRepository;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];
    protected $ignoreCsrfToken = true;
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function register()
    {
        $this->bindClientRepository();
    }

    protected function bindClientRepository()
    {
        $this->app->bind(\Laravel\Passport\Bridge\ClientRepository::class, ClientRepository::class);
    }

    public function boot()
    {
        $this->registerPolicies();

        Passport::routes(null,["prefix"=>"api/v1/oauth"]);
        Passport::ignoreCsrfToken(true);

        Passport::tokensCan([
            'view-posts' => 'View posts',
            'view-user' => 'View user',
        ]);
        Passport::hashClientSecrets();
        
    }
}
