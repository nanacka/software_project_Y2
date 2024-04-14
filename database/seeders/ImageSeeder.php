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
        // Define the path to the image
        $imagePath = 'cover.png'; // Adjust the path if necessary
        
        // Create a new image record in the images table
        Image::create([
            'image_path' => $imagePath,
        ]);
    }
}