<?php

use App\Permission;
use Illuminate\Database\Seeder;


class PermissionTableSeeder extends Seeder
{
    public function run()
    {
        $cu = new Permission();
        $cu->name = "add_user";
        $cu->display_name = "Create new User";
        $cu->description = "Adds New User to The Database";
        $cu->save();


        $eu = new Permission();
        $eu->name = "edit_user";
        $eu->display_name = "Edit the user";
        $eu->description = "Edits the the Existing User";
        $eu->save();


        $du = new Permission();
        $du->name = "delete_user";
        $du->display_name = "Delete the user";
        $du->description = "Delete The Existing User";
        $du->save();

        $cd = new Permission();
        $cd->name = "add_department";
        $cd->display_name = "Create new department";
        $cd->description = "Adds New department to The Database";
        $cd->save();


        $ed = new Permission();
        $ed->name = "edit_department";
        $ed->display_name = "Edit the department";
        $ed->description = "Edits the the Existing department";
        $ed->save();


        $dd = new Permission();
        $dd->name = "delete_department";
        $dd->display_name = "Delete the department";
        $dd->description = "Delete The Existing department";
        $dd->save();

        $co = new Permission();
        $co->name = "add_objective";
        $co->display_name = "Create new objective";
        $co->description = "Adds New objective to The Database";
        $co->save();


        $eo = new Permission();
        $eo->name = "edit_objective";
        $eo->display_name = "Edit the objective";
        $eo->description = "Edits the the Existing objective";
        $eo->save();


        $do = new Permission();
        $do->name = "delete_objective";
        $do->display_name = "Delete the objective";
        $do->description = "Delete The Existing objective";
        $do->save();

        $co = new Permission();
        $co->name = "add_strategic_initiatives";
        $co->display_name = "Create new strategic_initiatives";
        $co->description = "Adds New strategic_initiatives to The Database";
        $co->save();


        $eo = new Permission();
        $eo->name = "edit_strategic_initiatives";
        $eo->display_name = "Edit the strategic_initiatives";
        $eo->description = "Edits the the Existing strategic_initiatives";
        $eo->save();


        $do = new Permission();
        $do->name = "delete_strategic_initiatives";
        $do->display_name = "Delete the strategic_initiatives";
        $do->description = "Delete The Existing strategic_initiatives";
        $do->save();

        $co = new Permission();
        $co->name = "add_activity";
        $co->display_name = "Create new activity";
        $co->description = "Adds New activity to The Database";
        $co->save();


        $eo = new Permission();
        $eo->name = "edit_activity";
        $eo->display_name = "Edit the activity";
        $eo->description = "Edits the the Existing activity";
        $eo->save();


        $do = new Permission();
        $do->name = "delete_activity";
        $do->display_name = "Delete the activity";
        $do->description = "Delete The Existing activity";
        $do->save();
    }
}
