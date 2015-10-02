<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Middleware\AuthenticateWithBasicAuth;

class CustomBasicAuth extends AuthenticateWithBasicAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $valid = $request->getUser() == env('BASIC_USERNAME') && $request->getPassword() == env('BASIC_PASSWORD');
        if($valid) {
            return $next($request);
        }
        $headers = ['WWW-Authenticate' => 'Basic'];

        return new Response('Invalid credentials.', 401, $headers);
    }
}
