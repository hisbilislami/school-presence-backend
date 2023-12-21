<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PublicAccessOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     *
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Get current host, if not match PUBLIC_ACCESS_ENDPOINT
        // terminate it
        $host = $request->header('host');
        $url = parse_url(config('app.public-access-endpoint.url'));
        if (!str_contains($host, $url['host'])) {
            abort(404, 'Invalid request');
        }

        return $next($request);
    }
}
