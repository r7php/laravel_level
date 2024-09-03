<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class VerifyCsrfToken extends ApiCsrfExempt
{
    protected $except = [
        // other routes that need excepting
        'stripe/*',
    ];

    public function handle($request, Closure $next): Response
    {
        if($request->route()->named('logout')) {

            if (!Auth::check() || Auth::guard()->viaRemember()) {

                $this->except[] = 'logout';

            }
        }

        return parent::handle($request, $next);
    }
}
