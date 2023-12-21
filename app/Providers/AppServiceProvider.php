<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\LazyLoadingViolationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /*
         * Prevent lazy load when not in production
         */
        if (app()->environment('local')) {
            Model::preventLazyLoading(true);
            // Error handler
            Model::handleLazyLoadingViolationUsing(function ($model, $relation): void {
                $class = $model->{$relation}()->getRelated();

                if (Str::startsWith(\get_class($class), 'App')) {
                    throw new LazyLoadingViolationException($model, $relation);
                }
            });
        }

        Validator::extend('valid_person_student_relation', function ($attribute, $value, $parameters, $validator) {
            // Check if the ID exists in m_person and is related to m_student
            return DB::table('m_person')
                ->where('m_person.id', $value)
                ->join('m_student', 'm_person.id', '=', 'm_student.person_id')
                ->exists()
            ;
        }, message: 'The person_id you entered for the individual as a child does not exist in the database.');
    }
}
