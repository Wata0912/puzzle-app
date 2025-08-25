<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\GetItemLog;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function show(Request $request)
    {
        $user = User::findOrFail($request->user()->id);
        return response()->json(UserResource::make($user));
    }

    public function items(Request $request)
    {
        $items = GetItemLog::where('user_id', $request->user_id)->get();
        return response()->json(UserResource::make($items));
    }

    public function index(Request $request)
    {
        $users = User::All();
        return response()->json(UserResource::collection($users));
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'level' => $request->level
        ]);

        //APIトークンを発行
        $token = $user->createToken($request->name)->plainTextToken;

        //暗号化していないトークンをクライアントに返す
        return response()->json(['token' => $token]);
    }

    public function update(Request $request)
    {
        $user = User::findOrFail($request->user()->id);
        $user->name = $request->name;
        if (isset($request->level)) {
            $user->level = $request->level;
        }
        $user->save();
        return response()->json(UserResource::make($user));
    }

    public function levelUP(Request $request)
    {
        // 指定IDのユーザーを取得（存在しない場合は404）
        $user = User::findOrFail($request->user_id);

        $user->increment('level'); // 自動で +1 & save してくれる

        return response()->json(UserResource::make($user));
    }


}
