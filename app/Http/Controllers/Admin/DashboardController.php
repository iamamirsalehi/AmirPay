<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;
use App\Repository\Contracts\StatisticsRepositoryInterface;

class DashboardController extends AdminController
{
    private $statisticsRepository;

    public function __construct(StatisticsRepositoryInterface $statisticsRepository)
    {
        $this->statisticsRepository = $statisticsRepository;
    }

    public function index()
    {
        $statistics = new \stdClass();

        $statistics->totalGetways            = $this->statisticsRepository->getTotalGetways();
        $statistics->todayTotalTransactions  = $this->statisticsRepository->getTodayTotalTransactions();
        $statistics->todayTotalWithdrawals   = $this->statisticsRepository->getTodayTotalWithdrawals();
        $statistics->pendingGateways         = $this->statisticsRepository->getPendingGateways();

        return view('admin.dashboard.index', compact('statistics'));
    }
}
