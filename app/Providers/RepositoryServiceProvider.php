<?php

namespace App\Providers;

use EloquentPaymentRepository;
use Illuminate\Support\ServiceProvider;
use App\Repository\Contracts\PaymentRepositoryInterface;
use App\Repository\Eloquent\EloquentStatisticRepository;
use App\Repository\Eloquent\User\EloquentUserRepository;
use App\Repository\Contracts\StatisticsRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(UserRepositotyInterface::class, EloquentUserRepository::class);

        $this->app->bind(PaymentRepositoryInterface::class, EloquentPaymentRepository::class);

        $this->app->bind(StatisticsRepositoryInterface::class, EloquentStatisticRepository::class);
    }
}
