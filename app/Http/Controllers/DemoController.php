<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DemoController extends Controller
{
    public function index(Request $req) {
        $user = new User();
        $user->fill($req->all());
        $user->password = Hash::make($req->input('password'));
//        $user->username = 'hoang';
//        $users = [
//            'user1',
//            'user2'
//        ];
//        $user = [
//            'name' => 'hoang',
//            'age' => 10
//        ];
//        $user->name = $req->input('name');
//        $user->password = Hash::make($req->input('password'));
//        $user->email = 'hoang@gmail.com';
        $user->save();
//        $users = User::query()
//            ->where('name', 'like', '%hoangabc%')
//            ->get();
        return $user;

    }
}
