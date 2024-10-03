<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        Post::create([
            'content' => 'Lorem ipsum',
            'likes' => 15,
        ]);

        $users = [
            [
                "name" => "Fero",
            ], 
            [
                "name" => "Dano",
            ], 
            [
                "name" => "Timo",
            ], 
        ];
        
        return view( 'dashboard', ["users" => $users, "name" => "Dashboard", "posts" => Post::orderby("likes", "ASC")->get(),] );
    }
}
