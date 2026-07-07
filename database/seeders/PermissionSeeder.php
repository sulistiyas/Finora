<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Modul yang mendukung aksi CRUD standar.
     *
     * @var array<int, string>
     */
    private array $crudModules = [
        'account',
        'category',
        'transaction',
        'budget',
        'saving_goal',
    ];

    /**
     * Aksi CRUD standar untuk setiap modul.
     *
     * @var array<int, string>
     */
    private array $crudActions = [
        'view',
        'create',
        'update',
        'delete',
    ];

    /**
     * Permission khusus untuk modul team.
     *
     * @var array<int, string>
     */
    private array $teamPermissions = [
        'team.view',
        'team.update',
        'team.delete',
        'team.manage_members',
    ];

    public function run(): void
    {
        $permissions = [];

        foreach ($this->crudModules as $module) {
            foreach ($this->crudActions as $action) {
                $permissions[] = [
                    'name' => "{$module}.{$action}",
                    'description' => ucfirst($action) . ' ' . str_replace('_', ' ', $module),
                ];
            }
        }

        foreach ($this->teamPermissions as $name) {
            $permissions[] = [
                'name' => $name,
                'description' => ucfirst(str_replace(['.', '_'], ' ', $name)),
            ];
        }

        foreach ($permissions as $permission) {
            Permission::query()->updateOrCreate(
                ['name' => $permission['name']],
                ['description' => $permission['description']],
            );
        }
    }
}