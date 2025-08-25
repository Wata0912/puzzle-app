<?php

namespace Database\Seeders;

use App\Models\StageObject;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AccountsTableSeeder::class);
        $this->call(Items::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DetailsSeeder::class);
        $this->call(StageTableSeeder::class);
        $this->call(StageCallsTableSeeder::class);
        $this->call(StageObjectsTableSeeder::class);
        $this->call(GetItemLogsTableSeeder::class);
    }
}
