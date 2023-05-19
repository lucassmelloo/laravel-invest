<?php

namespace App\Providers;

use App\Repositories\Eloquent\FixedIncomeRepository;
use App\Repositories\FixedIncomeRepositoryInterface;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(FixedIncomeRepositoryInterface::class, FixedIncomeRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('after_today', function($attribute, $value, $parameters, $validator){
            $today = Carbon::now()->format('Y-m-d');
            return $value >= $today;
        });
    }
}
