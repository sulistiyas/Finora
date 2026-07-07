<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Daftar mata uang default. exchange_rate adalah nilai placeholder
     * terhadap IDR sebagai base currency, sebaiknya diperbarui berkala
     * melalui job/scheduler terpisah.
     *
     * @var array<int, array{code: string, name: string, symbol: string, exchange_rate: float, is_base: bool}>
     */
    private array $currencies = [
        ['code' => 'IDR', 'name' => 'Indonesian Rupiah', 'symbol' => 'Rp', 'exchange_rate' => 1, 'is_base' => true],
        ['code' => 'USD', 'name' => 'US Dollar', 'symbol' => '$', 'exchange_rate' => 16000, 'is_base' => false],
        ['code' => 'EUR', 'name' => 'Euro', 'symbol' => '€', 'exchange_rate' => 17500, 'is_base' => false],
        ['code' => 'SGD', 'name' => 'Singapore Dollar', 'symbol' => 'S$', 'exchange_rate' => 11800, 'is_base' => false],
        ['code' => 'JPY', 'name' => 'Japanese Yen', 'symbol' => '¥', 'exchange_rate' => 105, 'is_base' => false],
        ['code' => 'MYR', 'name' => 'Malaysian Ringgit', 'symbol' => 'RM', 'exchange_rate' => 3450, 'is_base' => false],
    ];

    public function run(): void
    {
        foreach ($this->currencies as $currency) {
            Currency::query()->updateOrCreate(
                ['code' => $currency['code']],
                [
                    'name' => $currency['name'],
                    'symbol' => $currency['symbol'],
                    'exchange_rate' => $currency['exchange_rate'],
                    'is_base' => $currency['is_base'],
                ],
            );
        }
    }
}