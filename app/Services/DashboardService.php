<?php

namespace App\Services;

use App\Repositories\DashboardRepository;

class DashboardService
{
    public function __construct(private readonly DashboardRepository $dashboardRepository)
    {
    }

    /**
     * @return array<string, mixed>
     */
    public function getSummary(): array
    {
        return [
            'total_users' => $this->dashboardRepository->countUsers(),
            'total_teams' => $this->dashboardRepository->countTeams(),
            'total_accounts' => $this->dashboardRepository->countAccounts(),
            'total_transactions' => $this->dashboardRepository->countTransactions(),
            'latest_teams' => $this->dashboardRepository->latestTeams(),
            'latest_users' => $this->dashboardRepository->latestUsers(),
        ];
    }
}