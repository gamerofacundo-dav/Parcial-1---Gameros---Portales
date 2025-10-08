<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\GamesControllerame;

class HomeController extends Controller {
    public function home() {
        $games = GamesController::firstTwoGames();
        $blogs = BlogsController::allBlogsForTheHome();
        return view('home', [
            'games' => $games,
            'blogs' => $blogs
        ]);
    }

    public function adminHome() {
        return view('homeAdmin');
    }
}