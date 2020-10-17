<?php
session_start();

$results = '';

$correct = null;

$haveAnswer = true;

# If the answer is equivalent to pumpkin, then
if ($_GET['answer'] == '') {
    //$results = 'You didnt enter a guess';
    $haveAnswer = false;
} elseif ($_GET['answer'] == 'pumpkin') {
    //$results = 'Correct!';
    $correct = true;
} else {
    //$results = 'Incorrect';
    $correct = false;
}

$_SESSION['results'] = [
    'haveAnswer' => $haveAnswer,
    'correct' => $correct
];

#Redirect user to done.php
header('Location: done.php');