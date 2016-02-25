<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redis;

class AppController extends Controller {
    public function register() {
        return view('app.register');
    }

    public function insertUser(Request $request) {
        $redis = new Redis();
        $user_id = Redis::incr('next_user_id');
        $username = $request->input('username');
        Redis::hmset("user:$user_id", array(
            'name' => $request->input('name'),
            'username' => $username,
            'password' => $request->input('password'),
        ));

        Redis::hset('users', $username, $user_id);

        return redirect('view/user?un=' . $username);
    }

    public function viewUser(Request $request) {
        $username = $request->input('un');
        $user_id = Redis::hget('users', $username);
        $user_info = Redis::hgetall("user:$user_id");

        return view('app.user_view', array(
            'user_info' => $user_info
        ));
    }
}
