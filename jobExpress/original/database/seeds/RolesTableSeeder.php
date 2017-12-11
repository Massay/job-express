<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'superadmin',
            'description' => 'superadmin',

        ]);
        DB::table('roles')->insert([
            'name' => 'admin',
            'description' => 'admin',

        ]);
        DB::table('roles')->insert([
            'name' => 'normal',
            'description' => 'normal',

        ]);
        DB::table('roles')->insert([
            'name' => 'delete',
            'description' => 'delete',

        ]);
        DB::table('roles')->insert([
            'name' => 'edit',
            'description' => 'edit',

        ]);
        DB::table('roles')->insert([
            'name' => 'view',
            'description' => 'view',

        ]);
        DB::table('roles')->insert([
            'name' => 'create',
            'description' => 'create',

        ]);
        
    }
}
