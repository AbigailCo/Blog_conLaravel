<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

class Kernel extends HttpKernel
{
    protected $middlewareGroups = [
        'web' => [
            // Otros middlewares...
            \App\Http\Middleware\VerifyCsrfToken::class,
        ],
    ];
}
