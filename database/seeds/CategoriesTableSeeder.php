<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        //dd('here');
        DB::collection('categories')->delete();

        DB::collection('categories')->insert($this->preparePurchaseCategories());
        DB::collection('categories')->insert($this->prepareIncomeCategories());
    }

    private function preparePurchaseCategories()
    {
        return [
            [
                'userId' => null,
                'type' => 'purchase',
                'name' => 'Еда',
                'slug' => 'eda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'userId' => null,
                'type' => 'purchase',
                'name' => 'Комуналка',
                'slug' => 'comunalka',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'userId' => null,
                'type' => 'purchase',
                'name' => 'Одежда',
                'slug' => 'odejhda',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'userId' => null,
                'type' => 'purchase',
                'name' => 'Медицина',
                'slug' => 'medicina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
    }

    private function prepareIncomeCategories()
    {
        return [
            [
                'userId' => null,
                'type' => 'income',
                'name' => 'Зарплата',
                'slug' => 'zarplata',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'userId' => null,
                'type' => 'income',
                'name' => 'Премия',
                'slug' => 'premia',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'userId' => null,
                'type' => 'income',
                'name' => 'Другое',
                'slug' => 'other',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];
    }
}