<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Orle',
            'full_name' => 'Aurellia Kanasta Sari',
            'phone_number' => '085982472911',
            'email' => 'orle@gmail.com',
            'password' => Hash::make('123123123'),
        ]);
        User::create([
            'username' => 'Kanibal',
            'full_name' => 'Sariawan',
            'phone_number' => '081275917275',
            'email' => 'kanwan@gmail.com',
            'password' => Hash::make('123123123'),
        ]);
        User::create([
            'username' => 'Geracey',
            'full_name' => 'Grace Shalom Basala',
            'phone_number' => '082175912488',
            'email' => 'geracey@gmail.com',
            'password' => Hash::make('123123123'),
        ]);
        User::create([
            'username' => 'Ayam Gosong',
            'full_name' => 'Justine Taniardi',
            'phone_number' => '089721859122',
            'email' => 'justine@gmail.com',
            'password' => Hash::make('123123123'),
        ]);
        User::create([
            'username' => 'SkyLight',
            'full_name' => 'Vincent Nicola',
            'phone_number' => '089693581298',
            'email' => 'vincent@gmail.com',
            'password' => Hash::make('123123123'),
        ]);
        User::create([
            'username' => 'Filleo',
            'full_name' => 'Fillio Brily Endrawan',
            'phone_number' => '089127481279',
            'email' => 'fillio@gmail.com',
            'password' => Hash::make('123123123'),
        ]);
        User::create([
            'username' => 'onic',
            'full_name' => 'Monica Ernestine',
            'phone_number' => '080712359033',
            'email' => 'monica@gmail.com',
            'password' => Hash::make('123123123'),
        ]);
        User::create([
            'username' => 'Eve',
            'full_name' => 'Evelyn Eleketet',
            'phone_number' => '089561827582',
            'email' => 'evelyn@gmail.com',
            'password' => Hash::make('123123123'),
        ]);
        User::create([
            'username' => 'ketot',
            'full_name' => 'Vinisia Evelyn',
            'phone_number' => '089761234577',
            'email' => 'vinisia@gmail.com',
            'password' => Hash::make('123123123'),
        ]);
        User::create([
            'username' => 'OooVinn',
            'full_name' => 'Davin Owesome',
            'phone_number' => '081279512775',
            'email' => 'davin@gmail.com',
            'password' => Hash::make('123123123'),
        ]);
        User::create([
            'username' => 'Lexxy',
            'full_name' => 'Jericho Owen',
            'phone_number' => '089616284127',
            'email' => 'jericho@gmail.com',
            'password' => Hash::make('123123123'),
        ]);
        User::create([
            'username' => 'Tio Kumar',
            'full_name' => 'Princely Nathanael',
            'phone_number' => '089257128522',
            'email' => 'princely@gmail.com',
            'password' => Hash::make('123123123'),
        ]);
        User::create([
            'username' => 'Bebek Gosong',
            'full_name' => 'Dhycko Rici Pangeran',
            'phone_number' => '089157212574',
            'email' => 'dhycko@gmail.com',
            'password' => Hash::make('123123123'),
        ]);
        User::create([
            'username' => 'Pacar Nevan',
            'full_name' => 'Nico Nico',
            'phone_number' => '0896168249155',
            'email' => 'nico@gmail.com',
            'password' => Hash::make('123123123'),
        ]);
        User::create([
            'username' => 'Pangeran',
            'full_name' => 'Jansen Denxel',
            'phone_number' => '089127591288',
            'email' => 'jansen@gmail.com',
            'password' => Hash::make('123123123'),
        ]);
    }
}
