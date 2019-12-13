<?php

use Illuminate\Database\Seeder;

class AnimalTableSeeder extends Seeder
{
     
     
    public function run()
    {

        DB::table('animal')->insert([
        'name' => 'Panda',
        'sexe' => M  ,
        'age' => 25 ,
        'weight' => 105,5 ,
        'size' => 1,80 ,
        ]); //
     DB::table('animal')->insert([
        'name' => 'Loup',
        'sexe' => M  ,
        'age' =>  18,
        'weight' =>  65  ,
        'size' => 1,40 ,
        ]);
    DB::table('animal')->insert([
        'name' => 'Chien',
        'sexe' => M  ,
        'age' => 16 ,
        'weight' => 58 ,
        'size' => 1.40 ,
        ]); 
    DB::table('animal')->insert([
        'name' => 'Chat',
        'sexe' => M  ,
        'age' => 12 ,
        'weight' => 0.50,
        'size' => 0.30,
        ]); 
}
}