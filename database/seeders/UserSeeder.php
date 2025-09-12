<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $user = new User();

        $user->name = 'elian navarro';
        $user->email = 'eliannavarro@gmail.com'; 
        $user->password = bcrypt('12345678');  

        $user->save();

        User::factory(count: 10)->create();

    }
}
