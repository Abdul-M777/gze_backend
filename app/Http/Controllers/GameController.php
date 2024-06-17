<?php


namespace App\Http\Controllers;

use MarcReichel\IGDBLaravel\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        // Fetch a list of games
        $games = Game::where('rating', '>', 80)->get();

        return view('games.index', compact('games'));
    }

    public function show($id)
    {
        // Fetch a specific game by ID
        $game = Game::find($id);

        return view('games.show', compact('game'));
    }
}