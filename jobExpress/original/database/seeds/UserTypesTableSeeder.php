<?php

use Illuminate\Database\Seeder;
use App\UserType;
class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_type = new UserType();
        $user_type->name ="Employee";
        $user_type->description="Job Seekers";
        $user_type->save();
        $user_type = new UserType();
        $user_type->name ="Employer";
        $user_type->description="Employers type";
        $user_type->save();
    }
}
