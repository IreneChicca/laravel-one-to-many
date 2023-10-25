<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Type;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $labels = [
            'front-end',
            'back-end',
            'full-stack'

        ];
        
        foreach ($labels as $type){

        $type = new Type();
        $type->label = $type;
        $type->color = $faker->hexColor();

        $type->save();
    }
    }


    

}