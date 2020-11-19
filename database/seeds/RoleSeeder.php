<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role'      => 'Manager Gudang',
        ]);
        DB::table('roles')->insert([
            'role'      => 'Agen',
        ]);
        DB::table('roles')->insert([
            'role'      => 'Driver',
        ]);
    }
}
