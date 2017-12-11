<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'name' => 'php'
        ]);
        DB::table('skills')->insert([
            'name' => 'javascript'
        ]);
        DB::table('skills')->insert([
            'name' => 'java'
        ]);
        DB::table('skills')->insert([
            'name' => 'c#'
        ]);
        DB::table('skills')->insert([
            'name' => 'typescript'
        ]);
        DB::table('skills')->insert([
            'name' => 'angular'
        ]);
        DB::table('skills')->insert([
            'name' => 'reactJS'
        ]);
        DB::table('skills')->insert([
            'name' => 'restful api'
        ]);
        DB::table('skills')->insert([
            'name' => 'python'
        ]);
        DB::table('skills')->insert([
            'name' => 'laravel'
        ]);
        DB::table('skills')->insert([
            'name' => 'project management'
        ]);
        DB::table('skills')->insert([
            'name' => 'ASP.NET'
        ]);
        DB::table('skills')->insert([
            'name' => 'sass'
        ]);
        DB::table('skills')->insert([
            'name' => 'less'
        ]);
        DB::table('skills')->insert([
            'name' => 'scss'
        ]);
        DB::table('skills')->insert([
            'name' => 'wordpress'
        ]);
        DB::table('skills')->insert([
            'name' => 'wix'
        ]);
    }
}
