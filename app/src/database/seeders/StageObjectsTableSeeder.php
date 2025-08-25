<?php

namespace Database\Seeders;

use App\Models\StageObject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StageObjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objects = [
            'DownRightCurve',
            'UpRightCurve',
            'DownLeftCurve',
            'UpLeftCurve',
            'SidePassage',
            'VerticalPassage',
            'slidePiece',
            'field'
        ];

        foreach ($objects as $object) {
            StageObject::create(
                ['name' => $object]
            );
        }

    }
}
