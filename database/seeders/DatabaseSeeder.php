<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        /**
         * Start Using of the factory
         */
        $userId = User::factory()->create(
            ['name' => 'John Doe']
        );

        $categoryIdOne = Category::factory()->create(
            ['name' => 'Hobby']
        );

        $categoryIdTwo = Category::factory()->create(
            ['name' => 'Work']
        );

        $categoryIdThree =Category::factory()->create(
            ['name' => 'Personal']
        );

        Post::factory(1)->create([
            'user_id' => $userId,
            'category_id' => $categoryIdOne
        ]);

        Post::factory(1)->create([
            'category_id' => $categoryIdOne
        ]);

        Post::factory(2)->create([
            'user_id' => $userId,
            'category_id' => $categoryIdTwo
        ]);

        Post::factory(1)->create([
            'category_id' => $categoryIdOne
        ]);

        Post::factory(2)->create([
            'user_id' => $userId,
            'category_id' => $categoryIdThree
        ]);


        /**
         * Start of using the seeder
         */

        // User::truncate();
        // User::factory(5)->create();

        // $this->call([
        //     CategorySeeder::class,
        //     PostSeeder::class
        // ]);

        /**
         * End of using the seeder
         */

    }
}
