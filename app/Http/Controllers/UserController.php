<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //一般ユーザーのコントローラ
    public function top(){
        return view('user.top');
    }
    
    //パスワード変更
    public function editPassword(){
        return view ('user_password_edit');
    }

    public function updatePassword(UpdatePasswordRequest $request){
        $user=\Auth::user();
        //パスワードのハッシュ化
        $user->password=bcrypt($request->get('new-password'));
        $user->save();
        //変更後、メッセージと共に前の画面にリダイレクトする
        return redirect()->back()->with('update_password_success','パスワードを変更しました');
    }
    
}
