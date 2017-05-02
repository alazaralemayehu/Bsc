<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $owner = new Role();
        $owner->name = "admin";
        $owner->display_name = "Admin user";
        $owner->description = "This admin is mostly related to user management";
        $owner->save();

        $owner = new Role();
        $owner->name = "ceo";
        $owner->display_name = "CEO User";
        $owner->description = "This user controls mostly the overall activity of the system";
        $owner->save();

        $owner = new Role();
        $owner->name = "department_head";
        $owner->display_name = "Department Head User";
        $owner->description = "This user is the one who controls the task assigned to the department by higher officials";
        $owner->save();

        $owner = new Role();
        $owner->name = "individual";
        $owner->display_name = "Department Head User";
        $owner->description = "This user is the one who controls the task assigned to the department by higher officials";
        $owner->save();
    }
}
