<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'                => '1',
            'role_id'           => '1',
            'name'              => 'Budi',
            'email'             => 'budi@gmail.com',
            'password'          => Hash::make('wedos123'),
            'Alamat'            => 'neroko',
            'no_telepon'         => '000011112222',
        ]);
        DB::table('users')->insert([
            'id'                 => '2',
            'role_id'            => '2',
            'name'               => 'Rendi',
            'email'              => 'rendi@gmail.com',
            'password'           => Hash::make('rendi123'),
            'Alamat'             => 'neroko',
            'no_telepon'          => '000011112222',
        ]);
        DB::table('users')->insert([
            'id'                 => '3',
            'role_id'            => '3',
            'name'               => 'Ipan',
            'email'              => 'ipan@gmail.com',
            'password'           => Hash::make('ipan123'),
            'Alamat'             => 'neroko',
            'no_telepon'          => '000011112222',
        ]);
        DB::table('users')->insert([
            'id'                 => '4',
            'role_id'            => '2',
            'name'               => 'Carolus',
            'email'              => 'carolus@gmail.com',
            'password'           => Hash::make('budiwedos'),
            'Alamat'             => 'neroko',
            'no_telepon'          => '000011112222',
        ]);
    }
}
