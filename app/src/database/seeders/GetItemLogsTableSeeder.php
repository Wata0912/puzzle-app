<?php

namespace Database\Seeders;

use App\Models\GetItemLog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GetItemLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GetItemLog::create([
            'user_id' => 1,
            'item_id' => 1
        ]);
    }
}
