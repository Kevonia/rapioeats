<?php

use Illuminate\Database\Seeder;
use App\restaurant;
class resturationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(restaurant::class, 30)->create();
    }
}
