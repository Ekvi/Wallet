<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        //dd('here');
        DB::collection('categories')->delete();

        DB::collection('categories')->insert($this->prepareCategories());
    }

    private function prepareCategories()
    {
        return [
            [
                'userId' => null,
                'name' => 'Еда',
                'slug' => 'eda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'userId' => null,
                'name' => 'Комуналка',
                'slug' => 'comunalka',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'userId' => null,
                'name' => 'Одежда',
                'slug' => 'odejhda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'userId' => null,
                'name' => 'Медицина',
                'slug' => 'medicina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
    }
}