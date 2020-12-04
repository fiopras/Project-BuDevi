<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\News;
use App\Player;
class PagesController extends Controller
{
    public function home() {
        $news = News::all();
        return view('home.index', compact('news'));
    }


    public function match() {
        return view('match.index');
    }

    public function team() {
        $player = Player::all();
        return view('team.index', compact('player'));
    }

    public function news() {
        $post = Posts::all();
        return view('news.index', compact('post'));
    }

    public function about() {
        return view('about.index');
    }

    public function dashboard() {
        return view('layouts.masteradmin');
    }
}
