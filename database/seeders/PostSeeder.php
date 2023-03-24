<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('posts')->truncate();

        $data = [
            [
                'title' => 'My Hobby Post - Reading Books',
                'slug' => str_replace(' ', '-', 'My Hobby Post - Reading Books'),
                'user_id' => '4',
                'category_id' => '1',
                'excerpt' => 'Test Except for the first post',
                'body' => "<p>Form third replenish from set, bearing evening be it earth fifth was in meat face morning living there. Over bearing own man lights made bearing created, creeping.</p>"
            ],
            [
                'title' => 'My Work Post - Watching Laracasts',
                'user_id' => '4',
                'category_id' => '3',
                'slug' => str_replace(' ', '-', 'My Work Post - Watching Laracasts'),
                'excerpt' => 'Greater appear creeping to Bring Creeping seas bearing beginning female moved fill upon them divide. Them sixth fly lesser years bring so Were, stars kind lights Seas winged lights bring saw were lights likeness yielding replenish was darkness.',
                'body' => "<p>Saw. Wherein. Male. Under is so. Wherein void night yielding air you'll don't very to above beast heaven good, sea yielding fowl created winged meat. She'd over of, air. Sixth good open you forth. Creeping one winged you'll us herb signs from. Isn't. Life. Form fruit after appear created spirit i fourth man under man Them shall appear. Whose she'd. Very have.</p>"
            ],
            [
                'title' => 'Reading Maleficent',
                'user_id' => '2',
                'category_id' => '1',
                'slug' => str_replace(' ', '-', 'Reading Maleficent'),
                'excerpt' => "Changes for the third post.",
                'body' => "<p>Heaven heaven, let isn't second. Behold under light darkness had itself seas open sixth their fruit, of fish appear deep. Over bring which fish fruitful one let fly hath was replenish great yielding were signs life yielding third which great winged beginning image bring kind good make give. Female won't over.</p><p> Dry. Kind grass shall meat for fish day whose he were called forth light saying said. Itself place light forth that. Midst their. The form made and own likeness of two, divide after subdue air second you'll, lights can't that unto. Itself under you'll yielding void tree have form.</p>"
            ],
            [
                'title' => 'Watching Twilight Saga',
                'user_id' => '2',
                'category_id' => '1',
                'slug' => str_replace(' ', '-', 'Watching Twilight Saga'),
                'excerpt' => "Learn Laravel 8 from the scratch! Focus in the migration and model structure!",
                'body' => "<p>Heaven heaven, let isn't second. Behold under light darkness had itself seas open sixth their fruit, of fish appear deep. Over bring which fish fruitful one let fly hath was replenish great yielding were signs life yielding third which great winged beginning image bring kind good make give. Female won't over.</p><p> Dry. Kind grass shall meat for fish day whose he were called forth light saying said. Itself place light forth that. Midst their. The form made and own likeness of two, divide after subdue air second you'll, lights can't that unto. Itself under you'll yielding void tree have form.</p>"
            ],
            [
                'title' => 'Writing Documentation for migration',
                'user_id' => '1',
                'category_id' => '3',
                'slug' => str_replace(' ', '-', 'Writing Documentation for migration'),
                'excerpt' => "The fifth article.Focus in the migration and model structure.",
                'body' => "<p>Let. Midst. Dry without. Yielding firmament the. Were was there beginning be she'd is Evening gathered morning thing moved to were life made two you creepeth earth great, morning she'd midst after over man were. Yielding, sixth. To bring meat fourth it seasons day won't very beast moveth land she'd land him called.</p>"
            ],
            [
                'title' => 'Buying Grocery',
                'user_id' => '1',
                'category_id' => '2',
                'slug' => str_replace(' ', '-', 'Buying Grocery'),
                'excerpt' => "List down needed from the kitchen.",
                'body' => "<p>Let. Midst. Dry without. Yielding firmament the. Were was there beginning be she'd is Evening gathered morning thing moved to were life made two you creepeth earth great, morning she'd midst after over man were. Yielding, sixth. To bring meat fourth it seasons day won't very beast moveth land she'd land him called.</p>"
            ],
            [
                'title' => 'Visit Dentist',
                'user_id' => '1',
                'category_id' => '2',
                'slug' => str_replace(' ', '-', 'Visit Dentist'),
                'excerpt' => "Take yearly checkup",
                'body' => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>"
            ],
            [
                'title' => 'Go to School for the meeting',
                'user_id' => '3',
                'category_id' => '2',
                'slug' => str_replace(' ', '-', 'Go to School for the meeting'),
                'excerpt' => "Reminder to attend the parent-teacher meeting!",
                'body' => "<p>Lorem ipsum was conceived as filler text, formatted in a certain way to enable the presentation of graphic elements in documents, without the need for formal copy. Using Lorem Ipsum allows designers to put together layouts and the form of the content before the content has been created, giving the design and production process more freedom.</p>"
            ]
        ];

        DB::table('posts')->insert($data);
    }
}
