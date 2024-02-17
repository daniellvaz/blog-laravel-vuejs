<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeed extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                "title" => "front-end",
                "value" => "Front-end"
            ],
            [
                "title" => "back-end",
                "value" => "Back-end"
            ],
            [
                "title" => "career",
                "value" => "carreira"
            ]
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}
