<?php

namespace App\Providers;
use App\Policies\AssignmentPolicy;
use App\Assignment;
use App\Attachment;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Assignment::class => AssignmentPolicy::class,
        Attachment::class => AttachmentPolicy::class,

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('accessAdminpanel', function($user) {
            return $user->user_type === 102;
        });

        //
    }
}
