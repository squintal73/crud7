<?php

use App\Models\Corona;
use Illuminate\Database\Seeder;

class CoronaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Corona::class, 30)->create();
    }
}
