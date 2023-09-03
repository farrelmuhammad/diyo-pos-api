<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $apiKey = $request->query('key');

        if ($this->isValidApiKey($apiKey)) {
            return $next($request);
        }

        return response('Unauthorized Access', 400);
    }

    private function isValidApiKey($apiKey)
    {
        return $apiKey === 'client-adfasdf123sdfbadsftwkljlkjl'; // Gantilah dengan cara validasi yang sesuai.
    }
}
