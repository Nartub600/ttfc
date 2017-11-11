<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Currency::class, 100)->create()->each(function ($currency) {
            $currency->variations()->saveMany(factory(App\Variation::class, 500)->make());
        });
    }
}
