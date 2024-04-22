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
        $name = null;
        switch($game){
            case 'tiger':
                $url = $this->getGame(auth()->user()->house, 'tiger');
                $name = 'Fortune Tiger';
                $img = asset('img/fortune-tiger-icon.webp');
                break;
            case 'piggy':
                $url = $this->getGame(auth()->user()->house, 'piggy');
                $name = 'Lucky Piggy';
                $img = asset('img/lucky-piggy.webp');
                break;
            case 'ox':
                $url = $this->getGame(auth()->user()->house, 'ox');
                $name = 'Fortune Ox';
                $img =  asset('img/fortune-ox-icon.webp');
                break;
            case 'fortune-mouse':
                $url = $this->getGame(auth()->user()->house, 'mouse');
                $name = 'Fortune Mouse';
                $img = asset('img/fortune-mouse-icon.webp');
                break;
            case 'fortune-rabbit':
                $url = $this->getGame(auth()->user()->house, 'fortune-rabbit');
                $name = 'Fortune Rabbit';
                $img = asset('img/fortune-rabbit-icon.webp');
                break;
            case 'dragon':
                $url = $this->getGame(auth()->user()->house, 'dragon');
                $name = 'Fortune Dragon';
                $img = asset('img/fortune-dragon.webp');
                break;
            case 'mines':
                $url = $this->getGame(auth()->user()->house, 'mines');
                $name = 'Mines';
                $img = asset('img/mines-icon.webp');
                break;
            case 'roulette':
                $url = $this->getGame(auth()->user()->house, 'roulette');
                $name = 'Roleta';
                $img =  asset('img/roulette-lightning-icon.webp');
                break;
            default:
                $url = $this->getGame(auth()->user()->house, 'tiger');
                $img = asset('img/fortune-tiger-icon.webp');
        }
        return view('game', compact('url', 'img', 'name'));
    }

    public function getGame($userHouse, $game){
        $house = [
            1 => [
                'tiger' => 'https://go.aff.br4-partners.com/drd4i32s',
                'piggy' => 'https://go.aff.br4-partners.com/eay8kae1',
                'ox' => 'https://go.aff.br4-partners.com/mf477kx3',
                'mouse' => 'https://go.aff.br4-partners.com/93ji8luw',
                'fortune-rabbit' => 'https://go.aff.br4-partners.com/puweffb0',
                'dragon' => 'https://go.aff.br4-partners.com/pd6heaba',
                'mines' => 'https://go.aff.br4-partners.com/rp3jfrzs',
                'roulette' => 'https://go.aff.br4-partners.com/okh02rw3',
            ],
            2 =>[
                'tiger' => 'https://go.aff.donald.bet/vtv713hh',
                'piggy' => 'https://go.aff.donald.bet/6zik0s0h',
                'ox' => 'https://go.aff.donald.bet/eg3hcc2a',
                'mouse' => 'https://go.aff.donald.bet/7o7eknti',
                'fortune-rabbit' => 'https://go.aff.donald.bet/yada52uo',
                'dragon' => 'https://go.aff.donald.bet/g8rkzkmn',
                'mines' => 'https://go.aff.donald.bet/6z70ya6x',
                'roulette' => 'https://go.aff.donald.bet/69i2uos6',
            ]
        ];
        return $house[$userHouse][$game];

    }
}
