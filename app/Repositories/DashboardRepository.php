<?php

namespace App\Repositories;

use App\Models\Account;
use App\Models\Team;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Collection;

class DashboardRepository
{
    public function countUsers(): int
    {
        return User::query()->count();
    }

    public function countTeams(): int
    {
        return Team::query()->count();
    }

    public function countAccounts(): int
    {
        return Account::query()->count();
    }

    public function countTransactions(): int
    {
        return Transaction::query()->count();
    }

    public function latestTeams(int $limit = 5): Collection
    {
        return Team::query()
            ->withCount('members')
            ->latest()
            ->limit($limit)
            ->get();
    }

    public function latestUsers(int $limit = 5): Collection
    {
        return User::query()
            ->latest()
            ->limit($limit)
            ->get();
    }
}