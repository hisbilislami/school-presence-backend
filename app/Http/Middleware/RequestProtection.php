<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Http\Request;

class RequestProtection
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, \Closure $next)
    {
        // set default timezone on handle request
        $timezone = auth()->user()->plant->timezone ?? 'Asia/Jakarta';
        date_default_timezone_set($timezone);
        // Apply only on `POST` and `PUT` request
        if (!\in_array(strtolower($request->method()), ['put', 'post'], true)) {
            return $next($request);
        }

        $input = $request->all();
        // strip every input value. String only
        array_walk_recursive(
            $input,
            static function (&$input): void {
                $input = \is_string($input) ? htmlspecialchars(trim($input)) : $input;
            }
        );

        $request->merge($input);

        return $next($request);
    }
}
