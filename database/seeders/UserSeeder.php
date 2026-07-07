<?php

namespace Database\Seeders;

use App\Models\Currency;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Total user yang akan tersedia setelah seeding (termasuk fixed users di bawah).
     */
    private int $totalUsers = 50;

    /**
     * User dengan email tetap untuk kebutuhan login/testing.
     * Password default hanya untuk development, wajib diganti di production.
     *
     * @var array<int, array{name: string, email: string, password: string}>
     */
    private array $users = [
        ['name' => 'Super Admin', 'email' => 'admin@example.com', 'password' => 'password'],
        ['name' => 'Budi Santoso', 'email' => 'budi@example.com', 'password' => 'password'],
        ['name' => 'Siti Aminah', 'email' => 'siti@example.com', 'password' => 'password'],
    ];

    public function run(): void
    {
        $defaultCurrencyId = Currency::query()->where('code', 'IDR')->value('id');

        foreach ($this->users as $user) {
            User::query()->updateOrCreate(
                ['email' => $user['email']],
                [
                    'name' => $user['name'],
                    'password' => Hash::make($user['password']),
                    'default_currency_id' => $defaultCurrencyId,
                    'email_verified_at' => now(),
                ],
            );
        }

        $remaining = max(0, $this->totalUsers - count($this->users));

        for ($i = 1; $i <= $remaining; $i++) {
            User::query()->create([
                'name' => "User {$i}",
                'email' => "user{$i}@example.com",
                'password' => Hash::make('password'),
                'default_currency_id' => $defaultCurrencyId,
                'email_verified_at' => now(),
            ]);
        }
    }
}