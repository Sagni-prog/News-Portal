<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1)->create();
        \App\Models\Catagory::factory(10)->create();
         \App\Models\Subcatagory::factory(10)->create();
         // \App\Models\Article::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Mike Van',
        //     'email' => 'test@example.com',
        // ]);
        
    }
}
