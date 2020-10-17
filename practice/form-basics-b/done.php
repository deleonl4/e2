<?php

session_start();

//var_dump($_SESSION);

//var_dump('You are on done.php

$results =  $_SESSION['results'];

//$haveAnswer = $results ['haveAnswer'];
//$correct = $results ['correct'];

#Does the above in a simplified way, works best when you have a lot of information
extract($results);

require 'done-view.php';