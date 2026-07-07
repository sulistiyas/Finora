<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Definisi team demo beserta anggotanya.
     * 'owner' merujuk ke email user pemilik team (otomatis diberi role 'owner').
     * 'members' adalah daftar email user lain beserta role yang di-assign.
     *
     * @var array<int, array{
     *     name: string,
     *     owner: string,
     *     members: array<int, array{email: string, role: string}>
     * }>
     */
    private array $teams = [
        [
            'name' => 'Keluarga Budi Santoso',
            'owner' => 'budi@example.com',
            'members' => [
                ['email' => 'siti@example.com', 'role' => 'admin'],
                ['email' => 'user1@example.com', 'role' => 'member'],
                ['email' => 'user2@example.com', 'role' => 'member'],
                ['email' => 'user3@example.com', 'role' => 'viewer'],
            ],
        ],
        [
            'name' => 'Tim Demo Admin',
            'owner' => 'admin@example.com',
            'members' => [
                ['email' => 'user4@example.com', 'role' => 'admin'],
                ['email' => 'user5@example.com', 'role' => 'member'],
                ['email' => 'user6@example.com', 'role' => 'member'],
                ['email' => 'user7@example.com', 'role' => 'member'],
                ['email' => 'user8@example.com', 'role' => 'viewer'],
            ],
        ],
    ];

    public function run(): void
    {
        $roleIds = Role::query()->pluck('id', 'name');

        foreach ($this->teams as $teamData) {
            $owner = User::query()->where('email', $teamData['owner'])->firstOrFail();

            $team = Team::query()->updateOrCreate(
                ['name' => $teamData['name']],
                ['owner_id' => $owner->id],
            );

            $pivotData = [
                $owner->id => [
                    'role_id' => $roleIds->get('owner'),
                    'status' => 'active',
                ],
            ];

            foreach ($teamData['members'] as $member) {
                $user = User::query()->where('email', $member['email'])->firstOrFail();

                $pivotData[$user->id] = [
                    'role_id' => $roleIds->get($member['role']),
                    'status' => 'active',
                ];
            }

            $team->members()->syncWithoutDetaching($pivotData);
        }
    }
}