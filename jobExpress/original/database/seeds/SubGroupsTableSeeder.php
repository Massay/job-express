<?php

use Illuminate\Database\Seeder;
use App\SubGroup;
class SubGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub_group = new SubGroup();
        $sub_group->group_id = 1;
        $sub_group->name ="Unix";
        $sub_group->description="Linux";
        $sub_group->save();
        $sub_group = new SubGroup();
        $sub_group->group_id = 1;
        $sub_group->name ="Mobile Development";
        $sub_group->description="Mobile Development";
        $sub_group->save();
        $sub_group = new SubGroup();
        $sub_group->group_id = 1;
        $sub_group->name ="ReactJS";
        $sub_group->description="ReactJS";
        $sub_group->save();
    }
}
