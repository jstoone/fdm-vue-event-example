<?php

use Illuminate\Database\Seeder;
use App\User;

class BaseDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $podcastSubscription = factory(App\Podcast::class)->create();
        $fruitSubscription = factory(App\Fruit::class)->create();
        $keyboardSubscription = factory(App\Keyboard::class)->create();

        // User with no subscriptions
        $emptyUser = factory(App\User::class)->create(['name' => 'Mr. Empty']);

        // User with one subscription
        $filledUser = factory(App\User::class)->create(['name' => 'Mr. Filled']);
        $filledUser->fruits()->attach($podcastSubscription);

        // User with all subscriptions
        $fullUser = factory(App\User::class)->create(['name' => 'Mr. Full']);
        $fullUser->podcasts()->attach($podcastSubscription);
        $fullUser->fruits()->attach($fruitSubscription);
        $fullUser->keyboards()->attach($keyboardSubscription);
    }

}
