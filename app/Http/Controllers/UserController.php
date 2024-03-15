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
        $game = $request->get('game');
        $url = null;
        $name = null;
        $img = null;
        switch($game){
            case 'tiger':
                $url = 'https://go.aff.br4-partners.com/drd4i32s';
                $name = 'Fortune Tiger';
                $img = asset('img/fortune-tiger-icon.webp');
                break;
            case 'piggy':
                $url = 'https://go.aff.br4-partners.com/eay8kae1';
                $name = 'Lucky Piggy';
                $img = asset('img/lucky-piggy.webp');
                break;
            case 'ox':
                $url = 'https://go.aff.br4-partners.com/mf477kx3';
                $name = 'Fortune Ox';
                $img =  asset('img/fortune-ox-icon.webp');
                break;
            case 'fortune-mouse':
                return;
                break;
            case 'fortune-rabbit':
                return;
                break;
            case 'dragon':
                $url = 'https://go.aff.br4-partners.com/pd6heaba';
                $name = 'Fortune Dragon';
                $img = asset('img/dragon.png');
                break;
            case 'mines':
                $url = 'https://go.aff.br4-partners.com/rp3jfrzs';
                $name = 'Mines';
                $img = asset('img/mines-icon.webp');
                break;
            case 'roulette':
                $url = 'https://go.aff.br4-partners.com/okh02rw3';
                $name = 'Roleta';
                $img =  asset('img/roulette-lightning-icon.webp');
                break;
            default:
                $url = 'https://go.aff.br4-partners.com/drd4i32s';
                $img = asset('img/fortune-tiger-icon.webp');
        }
        return view('game', compact('url', 'img', 'name'));
    }
}
