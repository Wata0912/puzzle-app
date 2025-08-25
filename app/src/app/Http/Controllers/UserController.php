<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $title = "ユーザー一覧";
        $users = User::simplePaginate(15);

        return view('users/index',
            ['title' => $title, 'users' => $users]);
    }

    public function show(Request $request)
    {
        // id でユーザーを取得
        $user = User::findOrFail($request['id']);

        // ビューに渡す
        return view('users.show', ['user' => $user]);
    }

    // 編集フォーム表示
    public function updateName(Request $request)
    {
        $user = User::findOrFail($request->id);
        $title = 'ユーザー変更';
        return view('users/updateName', ['user' => $user, 'title' => $title]);
    }

    // 更新処理
    public function edit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user = User::findOrFail($request['id']);
        $user->name = $request->name;
        $user->save();

        return redirect()->route('users.updateNameResult');
    }

    public function updateNameResult(Request $request)
    {
        $title = 'ユーザー変更';

        return view('users/updateNameResult', ['title' => $title]);
    }
}
