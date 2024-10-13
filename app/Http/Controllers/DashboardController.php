<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        /*Post::create([
            'content' => 'Lorem ipsum',
            'likes' => 15,
        ]);*/

        /*$users = [
            [
                "name" => "Fero",
            ], 
            [
                "name" => "Dano",
            ], 
            [
                "name" => "Timo",
            ], 
        ];*/

        $posts = Post::orderby("created_at", "DESC");

        if (request()->has('search')) {
            $content = request()->get('search', '');
            $posts = $posts->where('content', 'like', '%' . $content . '%'); // find all WHERE table CONTENT is LIKE wildcard % (contains string) variable $content and again wildcard %
        }
        
        return view( 'page.dashboard', [ "name" => "Dashboard", "posts" => $posts->paginate(5), ]); //paginate(x) => get()
    }
}
