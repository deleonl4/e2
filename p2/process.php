<?php
session_start();

$choice = $_GET['choice'];

$moves = ['Rock','Paper','Scissors'];
$comp = $moves[rand(0, 2)];
$winner = false;

if ($comp == $moves[0] and $choice == $moves[1]) {
    echo $winner = true;
} elseif ($comp == $moves[0] and $choice == $moves[2]) {
    echo $winner;
} elseif ($comp == $moves[1] and $choice == $moves[0]) {
    echo $winner;
} elseif ($comp == $moves[1] and $choice == $moves[2]) {
    echo $winner = true;
} elseif ($comp == $moves[2] and $choice == $moves[1]) {
    echo $winner;
} elseif ($comp == $moves[2] and $choice == $moves[0]) {
    echo $winner = true;
}


$_SESSION['results'] = [
    'choice' => $choice,
    'comp' => $comp,
    'winner' => $winner,
    ];

    header('Location: index.php');