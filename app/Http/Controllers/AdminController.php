<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function login()
    {
        $credentials = request()->only('email', 'password');
        if (auth()->attempt($credentials)) {
            if (auth()->user()->is_admin) {
                return redirect()->route('admin.home');
            } else{
                return redirect()->route('login');
            }
        }
        return redirect()->route('login');
    }

    public function viewLogin()
    {
        return view('admin.admin');
    }

    public function index()
    {
        $users = User::where('email', '<>',auth()->user()->email)->orderByDesc('created_at')->paginate(30);
        return view('admin.home', compact('users'));
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.home');
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->pro = intval($request->get('pro'));
        $user->save();
        return redirect()->route('admin.home');
    }
}
