<?php

use Illuminate\Database\Seeder;

class InterestSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Interest::class, 5)->create()->each(function ($user) {
            $user->make();
        });
    }
}
