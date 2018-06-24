<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Role::Truncate();
       	User::Truncate();
       	
       	$role = Role::create(['name' => 'root']);
        $role = Role::create(['name' => 'mod']);
        $role = Role::create(['name' => 'standard']);

        $user = new User;
        $user->name = "root";
        $user->email = "root@gmail.com";
        $user->password = bcrypt("root");
        $user->save();

        $user->assignRole('root');


        $user = new User;
        $user->name = "mod";
        $user->email = "mod@gmail.com";
        $user->password = bcrypt("mod");
        $user->save();

        $user->assignRole('mod');        


        $user = new User;
        $user->name = "standard";
        $user->email = "standard@gmail.com";
        $user->password = bcrypt("standard");
        $user->save();

        $user->assignRole('standard'); 

    }
}
