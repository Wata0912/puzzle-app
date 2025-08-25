<?php

namespace Database\Seeders;

use App\Models\Stage;
use App\Models\StageCell;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stage::create([
            'name' => '入口'
        ]);


    }
}
