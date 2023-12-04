<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        DB::listen(static function ($query): void {
            if ('SELECT' === strtoupper(substr($query->sql, 0, 6))) {
                DB::setDefaultConnection('pgsql_read');
            } else {
                DB::setDefaultConnection('pgsql_write');
            }
        });
    }
}
