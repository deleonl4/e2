<?php

# gets answerA value from the index.php file
//var_dump($_GET['answerA']);

# gets the entire index.php file
//var_dump($_GET);
//var_dump($_GET['answer']);

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

require 'process-view.php';