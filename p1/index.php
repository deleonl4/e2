<?php

$moves = ['Rock','Paper','Scissors'];
$player1Move = $moves[rand(0, 2)];
$player2Move = $moves[rand(0, 2)];

if ($player1Move == $player2Move) {
    $winner = 'Great minds think alike, try again!';
}

if ($player1Move == 'Rock' and $player2Move == 'Paper') {
    $winner = 'Player 2';
} elseif ($player1Move == 'Rock' and $player2Move == 'Scissors') {
    $winner = 'Player 1';
} elseif ($player1Move == 'Paper' and $player2Move == 'Rock') {
    $winner = 'Player 1';
} elseif ($player1Move == 'Paper' and $player2Move == 'Scissors') {
    $winner = 'Player 2';
} elseif ($player1Move == 'Scissors' and $player2Move == 'Paper') {
    $winner = 'Player 1';
} elseif ($player1Move == 'Scissors' and $player2Move == 'Rock') {
    $winner = 'Player 2';
}

require 'index-view.php';
