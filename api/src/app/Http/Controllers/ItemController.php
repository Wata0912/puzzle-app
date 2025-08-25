<?php

namespace App\Http\Controllers;

use App\Http\Resources\GetItemLogResourse;
use App\Http\Resources\UserResource;
use App\Models\GetItemLog;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function get(Request $request)
    {
        $log = GetItemLog::create([
            'user_id' => $request->user_id,
            'item_id' => $request->item_id
        ]);

        return response()->json(new GetItemLogResourse($log));
    }


    public function index()
    {
        $title = 'アイテム一覧';
        $items = Item::simplePaginate(15);

        return view('items/index',
            ['title' => $title, 'items' => $items]);
    }

    public function createResult()
    {
        return view('items/create_result',
        );
    }

    public function onDelete(Request $request)
    {

        if (isset($request['id'])) {
            $deleteItem = Item::where('id', '=', $request['id'])->first();
            $deleteItem->delete();
        }

        return view('items/delete_result');
    }

    public function delete(Request $request)
    {
        $id = $request['id'];
        $name = $request['name'];

        /*
        if (isset($request['id'])) {
            $deleteItem = Item::where('id', '=', $request['id'])->first();
            $deleteItem->delete();
        }*/

        return view('items/delete', ['id' => $id, 'name' => $name]);
    }


    public function deleteResult(Request $request)
    {
        return view('items/create_result');
    }

}
