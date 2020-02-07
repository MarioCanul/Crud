<?php

use Illuminate\Database\Seeder;

class ReporteGastoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ReporteGasto::class, 5)->create();
    }
}
