<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
{
$llista_usuaris = [
[
'name' => 'leniad',
'capDepartament' => 'admin',
'email' => 'leniad@fjeclot.net',
'password' => Hash::make('fjeClot23#')
],
[
'name' => 'aletse',
'capDepartament' => 'basic',
'email' => 'aletse@fjeclot.net',
'password' => Hash::make('clotFje24@')
],
];
DB::table('users')->insert($llista_usuaris);
}
}
