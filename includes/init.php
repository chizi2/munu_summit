<?php
// Define the core paths
// Define them as absolute paths to make sure that require_once works as expected
date_default_timezone_set('Africa/Kampala');
ini_set('memory_limit','96M');

//Site root & Theme
define('ROOT',"http://localhost/munu_summit");

//Start Session
session_start();
$_SESSION['active'] = time();