<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'nomes' => [
                'Vinicius Alves',
                'vinny Dois'
            ]
        ];
        dd($users);
    }

    public function show($id)
    {
        
        dd('id do usuário ' . $id);
    }
}


