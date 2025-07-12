<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Music;
use App\Models\Artist;
// use App\Modes\Music;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Home extends Controller
{
    function home()
    {
        $users = User::all();
        $musics = Music::all();
        $artists = Artist::all();
        return Inertia::render('Home', ['users' => $users, 'musics' => $musics, 'artists' => $artists]);
    }
}
