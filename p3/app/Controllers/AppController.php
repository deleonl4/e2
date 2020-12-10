<?php
namespace App\Controllers;

class AppController extends Controller
{
    // This method is triggered by the route "/"
    public function index()
    {
       $results = $this->app->old('results');
       
        return $this->app->view('index', [
            'results' => $results
        ]);
    }

    public function history() 
    {
        $rounds = $this->app->db()->all('rounds');

        return $this->app->view('history', [
            'rounds' => $rounds
        ]);
    }

    public function round()
    {
        $id = $this->app->param('id');

        $round = $this->app->db()->findById('rounds', $id);

        return $this->app->view('round', [
            'round' => $round
        ]);
    }

    public function play()
    {
        $this->app->validate([
            'move' => 'required'
        ]);

        $move = $this->app->input('move'); 

        // Save results to the database
        $moves = ['Rock','Paper','Scissors'];
        $comp = $moves[rand(0, 2)];
        
        $win = false;

        if ($comp == $moves[0] and $move == $moves[1]) {
            echo $win = true;
        } elseif ($comp == $moves[0] and $move == $moves[2]) {
            echo $win;
        } elseif ($comp == $moves[1] and $move == $moves[0]) {
            echo $win;
        } elseif ($comp == $moves[1] and $move == $moves[2]) {
            echo $win = true;
       } elseif ($comp == $moves[2] and $move == $moves[1]) {
            echo $win;
        } elseif ($comp == $moves[2] and $move == $moves[0]) {
            echo $win = true;
        }

        $data = [
            'move' => $move,
            // Convert the win value of "true" or "false" to the numeric value of "1" or "0"
            'win' => $win ? 1 : 0,
            'time' => date('Y-m-d H:i:s')
        ];

        $this->app->db()->insert('rounds', $data);

        // Redirect the user back to home page with from to play again
        
        $this->app->redirect('/', [
            'results' => [
            'move' => $move,
            'win' => $win,
            'comp' => $comp,
            'moves' => $moves
        ]
    ]);
    }
}