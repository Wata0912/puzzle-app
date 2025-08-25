<?php

namespace Database\Seeders;

use App\Models\Stage;
use App\Models\StageCell;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StageCallsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        //
        $StageDate1 =
            [
                [
                    'stage_id' => 1,
                    'x' => -1.5,
                    'y' => 1.5,
                    'object_id' => 2
                ],
                [
                    'stage_id' => 1,
                    'x' => -0.5,
                    'y' => 1.5,
                    'object_id' => 5
                ],
                [
                    'stage_id' => 1,
                    'x' => 0.5,
                    'y' => 1.5,
                    'object_id' => 5
                ],
                [
                    'stage_id' => 1,
                    'x' => 1.5,
                    'y' => 1.5,
                    'object_id' => 3
                ],
                [
                    'stage_id' => 1,
                    'x' => -1.5,
                    'y' => 0.5,
                    'object_id' => 8
                ],
                [
                    'stage_id' => 1,
                    'x' => -0.5,
                    'y' => 0.5,
                    'object_id' => 8
                ],
                [
                    'stage_id' => 1,
                    'x' => 0.5,
                    'y' => 0.5,
                    'object_id' => 8
                ],
                [
                    'stage_id' => 1,
                    'x' => 1.5,
                    'y' => 0.5,
                    'object_id' => 6
                ],
                [
                    'stage_id' => 1,
                    'x' => -1.5,
                    'y' => -0.5,
                    'object_id' => 8
                ],
                [
                    'stage_id' => 1,
                    'x' => -0.5,
                    'y' => -0.5,
                    'object_id' => 8
                ],
                [
                    'stage_id' => 1,
                    'x' => 0.5,
                    'y' => -0.5,
                    'object_id' => 8
                ],
                [
                    'stage_id' => 1,
                    'x' => 1.5,
                    'y' => -0.5,
                    'object_id' => 6
                ],
                [
                    'stage_id' => 1,
                    'x' => -1.5,
                    'y' => -1.5,
                    'object_id' => 8
                ],
                [
                    'stage_id' => 1,
                    'x' => -0.5,
                    'y' => -1.5,
                    'object_id' => 8
                ],
                [
                    'stage_id' => 1,
                    'x' => 0.5,
                    'y' => -1.5,
                    'object_id' => 7
                ],
                [
                    'stage_id' => 1,
                    'x' => 1.5,
                    'y' => -1.5,
                    'object_id' => 6
                ],

            ];

        foreach ($StageDate1 as $value) {
            StageCell::create($value);
        }
    }
}

