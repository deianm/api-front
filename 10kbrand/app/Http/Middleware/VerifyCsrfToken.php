<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/login_auth',
        '/dashboard/create_offer',
        '/dashboard/cancel_offer',
        '/dashboard/request_join',
        '/dashboard/cancel_join'
    ];
}
