<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FederationsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        User::factory()->count(30)->create();
    }
}
