<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
  /**
     * Los URIs que deben excluirse de la verificación CSRF.
     *
     * @var array
     */
    protected $except = [
        // Aquí puedes agregar URIs que deseas excluir de la verificación CSRF
    ];
}