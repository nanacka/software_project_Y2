<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $imagePath = 'cover.png'; // Adjust the path if necessary
        $randId = random_int(1,10);


        Image::create([
            'post_id'=> $randId,
            'image' => $imagePath
        ]);

        //\App\Models\Image::factory(50)->create();
        // Define the path to the image




    }
}