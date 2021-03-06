<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate(); did not work because of foreign key
        // DB::table('role_user')->truncate();
        DB::table('users')->delete();        
        DB::table('role_user')->delete();        
        $adminRole = Role::where('name','admin')->first();
        $authorRole = Role::where('name','author')->first();
        $userRole = Role::where('name','user')->first();

        $admin = User::create([
        	'name' => 'Admin',
        	'email' => 'admin@admin.com',
        	'password' => Hash::make('password')
        ]);

        $author = User::create([
        	'name' => 'author',
        	'email' => 'author@author.com',
        	'password' => Hash::make('password')
        ]);

        $user = User::create([
        	'name' => 'generic user',
        	'email' => 'user@user.com',
        	'password' => Hash::make('password')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}
