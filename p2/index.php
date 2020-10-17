<?php
session_start();

extract($_SESSION['results']);

require 'index-view.php';