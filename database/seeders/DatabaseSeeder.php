<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Contact::create([
            'name' => 'Alphinaud Leveilleur',
            'company' => 'The Order of the Twin Adder',
            'phone' => '(321) 123 4567',
            'email' => 'alphinaudWork@gmail.com'
        ]);

        Contact::create([
            'name' => 'Alisaie Leveilleur',
            'company' => 'Immortal Flames',
            'phone' => '(321) 123 4742',
            'email' => 'aliMasterCoder69@gmail.com'
        ]);

        Contact::create([
            'name' => 'Fourschenault Leveilleur',
            'company' => 'Maelstrom',
            'phone' => '(321) 123 8637',
            'email' => 'SharlayanOfficial_Fourschenault@gmail.com'
        ]);
    }
}
