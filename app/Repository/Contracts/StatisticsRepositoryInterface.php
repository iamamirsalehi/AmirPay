<?php

namespace App\Repository\Contracts;


interface StatisticsRepositoryInterface
{
    public function getTotalGetways();

    public function getTodayTotalTransactions();

    public function getTodayTotalWithdrawals();

    public function getPendingGateways();
}
