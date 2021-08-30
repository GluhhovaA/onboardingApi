<?php

use App\Interest;
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
        $interests = $this->getInterests();

        foreach($interests as $interestValue)
        {
            $interest = new Interest();
            $interest->name = $interestValue;
            $interest->save();
        }
    }

    private function getInterests()
    {
        return ['sport', 'health', 'food', 'shopping', 'animals',
            'books', 'photo', 'theater', 'music', 'languages', 'traveling',
            'traveling', 'charity', 'ecology','games', 'cars', 'home', 'science',
            'IT', 'design', 'parenting',
        ];
    }

}
