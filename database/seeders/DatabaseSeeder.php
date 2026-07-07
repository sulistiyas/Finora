<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('TRUNCATE TABLE
            currencies,
            teams,
            roles,
            permissions,
            role_permission,
            users,
            team_user,
            categories,
            accounts,
            budgets,
            saving_goals,
            transactions
        RESTART IDENTITY CASCADE');

        $this->call([
            CurrencySeeder::class,
            UserSeeder::class,
            PermissionSeeder::class,
            RoleSeeder::class,
            CategorySeeder::class,
            TeamSeeder::class,
        ]);
    }
}