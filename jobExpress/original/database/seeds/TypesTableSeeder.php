<?php

use Illuminate\Database\Seeder;
use App\Type;
class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new Type();
        $type->name="FullTime";
        $type->description="FullTime";
        $type->save();
        $type = new Type();
        $type->name="PartTime";
        $type->description="PartTime";
        $type->save();
        $type = new Type();
        $type->name="Volunteer";
        $type->description="Volunteer";
        $type->save();
        $type = new Type();
        $type->name="Contract";
        $type->description="Contract";
        $type->save();
        $type = new Type();
        $type->name="Freelancer";
        $type->description="Freelancer";
        $type->save();
        
        
    }
}
