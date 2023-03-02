<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Favorite;

class FavoriteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $favorites = [
            [
                'user_id' => 1,
                'restaurant_id' => 1,
            ],
            [
                'user_id' => 1,
                'restaurant_id' => 2,
            ],
            [
                'user_id' => 1,
                'restaurant_id' => 3,
            ],
            [
                'user_id' => 2,
                'restaurant_id' => 2,
            ],
            [
                'user_id' => 2,
                'restaurant_id' => 3,
            ],
            [
                'user_id' => 3,
                'restaurant_id' => 3,
            ],
        ];

        foreach ($favorites as $favorite) {
            Favorite::create($favorite);
        }
    }
}
