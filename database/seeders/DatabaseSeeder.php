<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $data = [
            [
                'title' => 'My First Post',
                'slug' => str_replace(' ', '-', 'My First Post'),
                'excerpt' => 'Test Except for the first post',
                'body' => "<p>Form third replenish from set, bearing evening be it earth fifth was in meat face morning living there. Over bearing own man lights made bearing created, creeping.</p>"
            ],
            [
                'title' => 'My Second Post',
                'slug' => str_replace(' ', '-', 'My Second Post'),
                'excerpt' => 'Greater appear creeping to Bring Creeping seas bearing beginning female moved fill upon them divide. Them sixth fly lesser years bring so Were, stars kind lights Seas winged lights bring saw were lights likeness yielding replenish was darkness.',
                'body' => "<p>Saw. Wherein. Male. Under is so. Wherein void night yielding air you'll don't very to above beast heaven good, sea yielding fowl created winged meat. She'd over of, air. Sixth good open you forth. Creeping one winged you'll us herb signs from. Isn't. Life. Form fruit after appear created spirit i fourth man under man Them shall appear. Whose she'd. Very have.</p>"
            ],
            [
                'title' => 'My Third Post',
                'slug' => str_replace(' ', '-', 'My Third Post'),
                'excerpt' => "Changes for the third post.",
                'body' => "<p>Heaven heaven, let isn't second. Behold under light darkness had itself seas open sixth their fruit, of fish appear deep. Over bring which fish fruitful one let fly hath was replenish great yielding were signs life yielding third which great winged beginning image bring kind good make give. Female won't over.</p><p> Dry. Kind grass shall meat for fish day whose he were called forth light saying said. Itself place light forth that. Midst their. The form made and own likeness of two, divide after subdue air second you'll, lights can't that unto. Itself under you'll yielding void tree have form.</p>"
            ],
            [
                'title' => 'My Fourth Post',
                'slug' => str_replace(' ', '-', 'My Fourth Post'),
                'excerpt' => "Learn Laravel 8 from the scratch! Focus in the migration and model structure!",
                'body' => "<p>Heaven heaven, let isn't second. Behold under light darkness had itself seas open sixth their fruit, of fish appear deep. Over bring which fish fruitful one let fly hath was replenish great yielding were signs life yielding third which great winged beginning image bring kind good make give. Female won't over.</p><p> Dry. Kind grass shall meat for fish day whose he were called forth light saying said. Itself place light forth that. Midst their. The form made and own likeness of two, divide after subdue air second you'll, lights can't that unto. Itself under you'll yielding void tree have form.</p>"
            ],
            [
                'title' => 'My Fifth Post',
                'slug' => str_replace(' ', '-', 'My Fifth Post'),
                'excerpt' => "The fifth article.Focus in the migration and model structure.",
                'body' => "<p>Let. Midst. Dry without. Yielding firmament the. Were was there beginning be she'd is Evening gathered morning thing moved to were life made two you creepeth earth great, morning she'd midst after over man were. Yielding, sixth. To bring meat fourth it seasons day won't very beast moveth land she'd land him called.</p>"
            ]
        ];

        DB::table('posts')->insert($data);
    }
}
