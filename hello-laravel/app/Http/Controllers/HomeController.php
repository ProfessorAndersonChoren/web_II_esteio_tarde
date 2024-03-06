<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('home');
    }

    function listagem(){
        $users = [
            [
                'name' => 'Maria Aparecida',
                'email' => 'maria.aparecida@email.com',
                'birthday' => '17/08/1980'
            ],
            [
                'name' => 'João Paulo',
                'email' => 'joao.paulo@email.com',
                'birthday' => '05/05/1998'
            ]
        ];
        return view('list_users',compact('users'));
    }
}
