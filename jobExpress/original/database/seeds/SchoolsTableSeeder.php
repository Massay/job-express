<?php

use Illuminate\Database\Seeder;
use App\School;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school = new School();
        $school->name="St Mary's  Senior";
        $school->description="High school for all smart students";
        $school->address_id =1;
        $school->save();

        $school = new School();
        $school->name="Ndows Comprehensive";
        $school->description="For all student who want to be great future leaders";
        $school->address_id =1;
        $school->save();

    }
}
