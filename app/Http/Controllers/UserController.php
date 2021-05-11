<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    //userデータの取得
    public function index() {
        $user = Auth::user();
        return view('user.index', ['user' => $user ]);
    }
    //userデータの編集
    public function edit() {
        $user = Auth::user();
        return view('user.edit', ['user' => $user ]);
    }
    //userデータの保存
    public function update(Request $request) {

        $user_form = $request->all();
        $user = Auth::user();
        //不要な「_token」の削除
        unset($user_form['_token']);
        //保存
        $user->fill($user_form)->save();
        //リダイレクト
        return redirect('user/index');
    }
}
