<?php

use Illuminate\Database\Seeder;
use App\Collection;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Collection::class, 4)->create();
    }
}
