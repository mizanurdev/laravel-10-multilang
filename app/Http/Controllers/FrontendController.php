<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class FrontendController extends Controller
{
    public function index() {
        $teams = Team::all();
        return view('frontend.index',[
            'teams' => $teams,
        ]);
    }
}
