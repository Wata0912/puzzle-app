<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        return view('auth/index', ['error_id' => $request->error_id]);
    }

    public function login(Request $request)
    {


        if (isset($_POST['name']) && isset($_POST['password'])) {
            $account = Account::where('name', '=', $_POST['name'])->first();

            if ($account === null) {
                return redirect('/1');
            } else {
                if (Hash::check($_POST['password'], $account->password)) {
                    return redirect('accounts/index');
                } else {
                    return redirect('/1');
                }
            }
        } else {
            return redirect('/1');
        }
    }

    public function logout(Request $request)
    {
        return redirect('/');
    }

    public function createItems(Request $request)
    {
        return view('items/create');
    }
}
