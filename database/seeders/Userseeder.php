<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create([
'name' => 'nabeel shamsu',
'email' => 'innfo@gmail.com',
'password' => '$2y$12$nGfpQK8.r5GrZiJEoBWwHuBpfPBSjomEelqNq2WkN8e4Hb5nsSKrq'


       ]);
    }
}
