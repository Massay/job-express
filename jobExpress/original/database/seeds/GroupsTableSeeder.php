<?php

use Illuminate\Database\Seeder;
use App\Group;
class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $group = new Group();
        $group->name ="Mobile Development";
        $group->description="Mobile Development";
        $group->save();
        $group = new Group();
        $group->name ="Php and Laravel";
        $group->description="Php and Laravel";
        $group->save();
        $group = new Group();
        $group->name ="Frontend Development";
        $group->description="Frontend Development";
        $group->save();
        $group = new Group();
        $group->name ="Networking";
        $group->description="networking";
        $group->save();
    }
}
