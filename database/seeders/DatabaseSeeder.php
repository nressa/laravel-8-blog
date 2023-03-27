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
            'category_id' => $categoryIdOne,
            'title' => 'Read the book Windfall by Jennifer Smith'
        ]);

        Post::factory(1)->create([
            'category_id' => $categoryIdOne,
            'title' => 'Pick-up the groceries ordered online'
        ]);

        Post::factory(2)->create([
            'user_id' => $userId,
            'category_id' => $categoryIdTwo,
            'title' => 'Learn while timeboxing to keep work-life balance'
        ]);

        Post::factory(1)->create([
            'category_id' => $categoryIdThree,
            'title' =>  "Visit the vet to get Snoopy's med"
        ]);

        Post::factory(1)->create([
            'user_id' => $userId,
            'category_id' => $categoryIdThree
        ]);

        Post::factory(4)->create([
            'user_id' => $userId,
            'category_id' => $categoryIdTwo
        ]);

        Post::factory(1)->create([
            'category_id' => $categoryIdOne,
            'title' =>  "Watch the Netflix Series Night Agent"
        ]);

        Post::factory(4)->create([
            'user_id' => $userId,
            'category_id' => $categoryIdOne
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
