<?php


namespace App\Http\Controllers;

use MarcReichel\IGDBLaravel\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(Request $request)
    {
        try {
            $limit = $request->input('limit', 100); // Default limit is 50
            $offset = $request->input('offset', 0); // Default offset is 0

            // Fetch games with rating greater than 80, limit, and offset
            // $games = Game::where('rating', '>', 80)
            $games = Game::all();
            // ->limit($limit)
            // ->offset($offset)
            // ->get();

            // Fetch the total count of games for pagination purposes
            // $totalGames = Game::where('rating', '>', 80)->count();
            $totalGames = Game::all()->count();



            // Prepare the response data
            $data = [
                'total' => $totalGames,
                'count' => $games->count(),
                'games' => $games
            ];

            return response()->json($data, 200);
        } catch (\Exception $e) {
            \Log::error('Error fetching games: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        // Validate that id is an integer
        if (!is_numeric($id) || (int)$id != $id) {
            return response()->json(['error' => 'Invalid ID format'], 400);
        }

        try {
            $game = Game::find((int)$id);

            if (!$game) {
                return response()->json(['error' => 'Game not found'], 404);
            }

            return response()->json($game, 200);
        } catch (\Exception $e) {
            \Log::error('Error fetching game: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
