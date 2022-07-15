<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\carbon;
use illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateUserFormRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function show($id)
    {
        //$user = User::where('id', $id)->first();

        

        if(!$user = User::find($id))
        return redirect()->route('user.index');

        return view('users.show', compact('user'));
    }
}


