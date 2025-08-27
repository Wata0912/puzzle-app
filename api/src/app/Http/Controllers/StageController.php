<?php

namespace App\Http\Controllers;

use App\Http\Resources\GetItemLogResourse;
use App\Models\Stage;
use App\Models\StageCell;
use Illuminate\Http\Request;

class StageController extends Controller
{
    //
    public function index(Request $Request)
    {
        $stages = Stage::all();
        return response()->json(new GetItemLogResourse($stages));
    }

    public function get(Request $request)
    {
        $cells = StageCell::where('stage_id', '=', $request->stage_id)->get();
        return response()->json($cells);
    }

    public function createStage(Request $request)
    {
        $title = 'ステージ作成';
        $options = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        return view('stages/createStage', ['options' => $options, 'title' => $title]);
    }

    public function createResult(Request $request)
    {
        $title = 'ステージ作成';

        return view('stages/createResult', ['title' => $title]);
    }

    public function showCell(Request $request)
    {
        $title = 'ステージ情報';
        $id = $request['id'];
        $Cells = StageCell::where('stage_id', '=', $id)->get();
        return view('stages/showCell', ['title' => $title, 'Cells' => $Cells]);
    }

    public function store(Request $request)
    {
        Stage::create([
            'name' => $request['name']
        ]);

        $stageNum = Stage::max('id');

        $posX = [1.5, 0.5, -0.5, -1.5];
        $posY = [1.5, 0.5, -0.5, -1.5];
        $index = 0; // object_id の配列のインデックス

        foreach ($posX as $x) {
            foreach ($posY as $y) {

                $objectId = $request['fruits'][$index % count($request['fruits'])];

                StageCell::create([
                    'stage_id' => $stageNum,
                    'x' => $x,
                    'y' => $y,
                    'object_id' => $objectId
                ]);

                $index++; // 次の object_id へ
            }
        }
        return redirect()->route('stages.createResult');

    }

}
