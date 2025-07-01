<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->data();

        foreach ($data as $value) {
            Place::create([
                'order' => $value['order'],
                'title' => $value['title'],
                'description' => $value['description'],
                'created_by' => $value['created_by']
            ]);
        }
    }

    private function data(): array
    {
        return [
            ['order' => 1, 'title' => 'Türkiye', 'description' => 'Türkiye', 'created_by'=>1],
            ['order' => 2, 'title' => 'Turkmenistan', 'description' => 'Turkmenistan', 'created_by'=>1],
            ['order' => 3, 'title' => 'Almanya', 'description' => 'Almanaya', 'created_by'=>1],
            ['order' => 4, 'title' => 'Rusya', 'description' => 'Rusya', 'created_by'=>1],

        ];
    }
}
