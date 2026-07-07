<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Kategori default sistem (team_id null), tersedia untuk seluruh team.
     *
     * @var array<int, array{name: string, type: string, icon: string}>
     */
    private array $categories = [
        ['name' => 'Gaji', 'type' => 'income', 'icon' => 'wallet'],
        ['name' => 'Bonus', 'type' => 'income', 'icon' => 'gift'],
        ['name' => 'Investasi', 'type' => 'income', 'icon' => 'trending-up'],
        ['name' => 'Pendapatan Lainnya', 'type' => 'income', 'icon' => 'plus-circle'],

        ['name' => 'Makanan & Minuman', 'type' => 'expense', 'icon' => 'utensils'],
        ['name' => 'Transportasi', 'type' => 'expense', 'icon' => 'car'],
        ['name' => 'Belanja', 'type' => 'expense', 'icon' => 'shopping-bag'],
        ['name' => 'Tagihan & Utilitas', 'type' => 'expense', 'icon' => 'file-text'],
        ['name' => 'Kesehatan', 'type' => 'expense', 'icon' => 'heart'],
        ['name' => 'Hiburan', 'type' => 'expense', 'icon' => 'film'],
        ['name' => 'Pendidikan', 'type' => 'expense', 'icon' => 'book'],
        ['name' => 'Pengeluaran Lainnya', 'type' => 'expense', 'icon' => 'minus-circle'],
    ];

    public function run(): void
    {
        foreach ($this->categories as $category) {
            Category::query()->updateOrCreate(
                [
                    'team_id' => null,
                    'name' => $category['name'],
                    'type' => $category['type'],
                ],
                [
                    'icon' => $category['icon'],
                    'is_active' => true,
                ],
            );
        }
    }
}