<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Role::truncate(); did not work because of foreign key
        DB::table('roles')->delete();        
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'author']);
        Role::create(['name'=>'user']);
    }
}
