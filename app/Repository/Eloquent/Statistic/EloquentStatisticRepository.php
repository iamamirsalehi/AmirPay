<?php

namespace App\Repository\Eloquent;

use App\Repository\Contracts\StatisticsRepositoryInterface;


class EloquentStatisticRepository implements StatisticsRepositoryInterface
{
    public function getTotalGetways()
    {
        return 0;
    }

    public function getTodayTotalTransactions()
    {
        return 0;
    }

    public function getTodayTotalWithdrawals()
    {
        return 0;
    }

    public function getPendingGateways()
    {
        return 0;
    }
}
