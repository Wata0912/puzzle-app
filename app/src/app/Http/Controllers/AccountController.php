<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Item;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\password;


class AccountController extends Controller
{
    //アカウントを一覧表示する
    public function index(Request $request)
    {
        $title = '管理一覧';

        return view('accounts/index',
            ['title' => $title]);
    }

    public function show(Request $request)
    {
        $title = '管理アカウント一覧';

        $accounts = Account::all();

        return view('accounts/show',
            ['title' => $title, 'accounts' => $accounts]);

    }

    public function create(Request $request)
    {
        $title = 'アカウント作成';

        return view('accounts/create',
            ['title' => $title]);

    }

    public function store(Request $request)
    {

        if (isset($request['name'])) {
            $items = Account::where('name', '=', $request['name'])->first();
            if ($items == null && isset($request['password'])) {
                Account::create([
                    'name' => $request['name'],
                    'password' => Hash::make($request['password'])
                ]);
                return redirect()->route('accounts.createResult');
            }
        }

        return redirect('accounts/create/1');

    }

    public function createResult(Request $request)
    {
        $title = 'アカウント作成';

        return view('accounts/createResult',
            ['title' => $title]);


    }

    public function onDelete(Request $request)
    {

        if (isset($request['id'])) {
            $deleteAccount = Account::where('id', '=', $request['id'])->first();
            $deleteAccount->delete();
        }

        return view('accounts/deleteResult');
    }

    public function delete(Request $request)
    {
        $id = $request['id'];
        $name = $request['name'];
        $title = 'アカウント作成';

        return view('accounts/delete', ['id' => $id, 'name' => $name, 'title' => $title]);
    }

}


