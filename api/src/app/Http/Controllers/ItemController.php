<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function create(Request $request)
    {
        return view('items/create', ['error_id' => $request->error_id]);
    }

    public function store(Request $request)
    {
        if (isset($request['name'])) {
            $items = Item::where('name', '=', $request['name'])->first();
            if ($items == null) {
                Item::create(['name' => $request['name']]);
                return redirect()->route('items.createResult');
            }
        }

        return redirect('items/create/1');

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
