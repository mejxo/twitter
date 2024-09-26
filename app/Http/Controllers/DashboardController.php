<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

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
        
        return view( 'dashboard', ["users" => $users,], ["name" => "Dashboard"] );
    }
}
