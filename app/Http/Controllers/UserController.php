<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function user_articles($id){
        $data = User::find($id);

        return view('articles.user_articles',[
            'user' => $data
        ]);
    }
}
