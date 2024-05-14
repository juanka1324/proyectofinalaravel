<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\Category;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sedanCategoryId = Category::where('name', 'Sedán')->first()->id;
        $suvCategoryId = Category::where('name', 'SUV')->first()->id;
        $deportivoCategoryId = Category::where('name', 'Deportivo')->first()->id;

        Car::create([
            'brand' => 'Toyota',
            'model' => 'Corolla',
            'year' => 2022,
            'color' => 'Plata',
            'price' => 25000.00,
            'category_id' => $sedanCategoryId,
        ]);

        Car::create([
            'brand' => 'Ford',
            'model' => 'Explorer',
            'year' => 2021,
            'color' => 'Negro',
            'price' => 35000.00,
            'category_id' => $suvCategoryId,
        ]);
    }
}
