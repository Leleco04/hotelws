<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index() {
        return view('site.login');
    }

    public function autenticar(Request $request) {

        $regras = [
            'email' => 'email',
            'password' => 'required'
        ];

        $mensagens = [
            'email' => 'O campo email não foi preenchido corretamente',
            'required' => 'O campo :attribute deve ser preenchido'
        ];

        $request->validate($regras, $mensagens);

        $users = new User();
        $email = $request->get('email');
        $password = $request->get('password');
        
        $user = $users->where('email', $email)->where('password', $password)->get()->first();

        if(isset($user->name)) {
            session_start();
            $_SESSION['name'] = $user->name;
            $_SESSION['email'] = $user->email;
            if($user->permissao == 0) {
                return redirect()->route('hotel.list');
            } else {
                return redirect()->route('hotel.administrators');
            }
        } else {
            return redirect()->route('site.login');
        }
    }
}
