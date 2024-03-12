<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function perfectPayCreate(Request $request){
        $data = $request->all();
        User::create([
            'name' => $data['customer']['full_name'],
            'email' => $data['customer']['email'],
            'password' => bcrypt(now()->timestamp)
        ]);
        return response()->json(['message' => 'User created successfully']);
    }

    public function play(){
        return view('play');
    }

    public function game(Request $request){
        $game = request()->get('game');
        $photo = [
            'fortune-tiger' => 'https://i0.wp.com/surgiu.com.br/wp-content/uploads/2023/06/fortune-tiger.jpg?ssl=1',
            'fortune-ox' => 'https://bc.imgix.net/game/image/ef08a940-5c56-4d59-bd5d-b747ca673d0a.png',
            'fortune-rabbit' => 'https://bc.imgix.net/game/image/146b9335-e513-4fd4-be0c-d9b999d1618a.png',
            'fortune-mouse' => 'https://bc.imgix.net/game/image/115f771c-2fc7-40e5-9338-746a7d0a8188.png'
        ];
        $img = $photo[$game];
        return view('game', compact('img'));
    }
}
