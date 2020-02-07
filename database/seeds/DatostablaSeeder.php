<?php

use Illuminate\Database\Seeder;

class DatostablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Datostabla::class, 50)->create();
    }
}
