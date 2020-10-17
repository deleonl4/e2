<?php

//Handle session data
session_start();

//Extract data from session, *if* the session has the results, otherwise, assume we've just landed on the page fresh (i.e. the form has not been submitted)
if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    extract($results);
//$haveAnswer = $results['haveAnswer'];
    //$correct = $results['correct'];
} else {
    $results = false;
}

//Reset the game data so we can start fresh the next time the game is loaded
$_SESSION['results'] = null;

require 'index-view.php';