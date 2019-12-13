<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@admin.fr',
            'password'=>bcrypt('admin1234'),
            'role'=>'administrateur',
        ]);
        DB::table('users')->insert([
            'name'=>'notadmin',
            'email'=>'notadmin@admin.fr',
            'password'=>bcrypt('notadmin1234'),
            'role'=>'merchant',
        ]);
    }
}
