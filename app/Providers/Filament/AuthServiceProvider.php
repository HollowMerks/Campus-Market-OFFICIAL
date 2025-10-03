<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Alumno;
use App\Models\Universidad;
use App\Policies\AlumnoPolicy;
use App\Policies\UniversidadPolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Alumno::class => AlumnoPolicy::class,
        Universidad::class => UniversidadPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
