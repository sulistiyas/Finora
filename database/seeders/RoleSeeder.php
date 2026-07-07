<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Definisi role beserta permission yang dimiliki.
     * Gunakan 'all' untuk memberikan seluruh permission yang ada.
     *
     * @var array<string, array{description: string, permissions: array<int, string>|string}>
     */
    private array $roles = [
        'owner' => [
            'description' => 'Pemilik team, memiliki akses penuh termasuk menghapus team.',
            'permissions' => 'all',
        ],
        'admin' => [
            'description' => 'Mengelola seluruh data keuangan dan anggota team.',
            'permissions' => [
                'account.view', 'account.create', 'account.update', 'account.delete',
                'category.view', 'category.create', 'category.update', 'category.delete',
                'transaction.view', 'transaction.create', 'transaction.update', 'transaction.delete',
                'budget.view', 'budget.create', 'budget.update', 'budget.delete',
                'saving_goal.view', 'saving_goal.create', 'saving_goal.update', 'saving_goal.delete',
                'team.view', 'team.update', 'team.manage_members',
            ],
        ],
        'member' => [
            'description' => 'Dapat mencatat dan mengelola data keuangan miliknya sendiri.',
            'permissions' => [
                'account.view', 'account.create', 'account.update',
                'category.view', 'category.create', 'category.update',
                'transaction.view', 'transaction.create', 'transaction.update',
                'budget.view', 'budget.create', 'budget.update',
                'saving_goal.view', 'saving_goal.create', 'saving_goal.update',
                'team.view',
            ],
        ],
        'viewer' => [
            'description' => 'Hanya dapat melihat data keuangan team, tanpa mengubah.',
            'permissions' => [
                'account.view',
                'category.view',
                'transaction.view',
                'budget.view',
                'saving_goal.view',
                'team.view',
            ],
        ],
    ];

    public function run(): void
    {
        $allPermissionIds = Permission::query()->pluck('id', 'name');

        foreach ($this->roles as $name => $definition) {
            $role = Role::query()->updateOrCreate(
                ['name' => $name],
                ['description' => $definition['description']],
            );

            $permissionIds = $definition['permissions'] === 'all'
                ? $allPermissionIds->values()->all()
                : $allPermissionIds->only($definition['permissions'])->values()->all();

            $role->permissions()->sync($permissionIds);
        }
    }
}