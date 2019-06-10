<?php
/**
 * Created by PhpStorm.
 * User: R'ben
 * Date: 26/May/2019
 * Time: 23:48
 */

require_once './includes/init.php';

// load basic functions next so that everything after can use them
require_once('./includes/functions.php');

//load core classes using dynamic links
// require_once('./includes/classes/dateandtime.php');
require_once('./includes/classes/database.php');
require_once('./includes/classes/dashboard.php');
require_once('./includes/classes/about.php');
require_once('./includes/classes/others.php');
require_once('./includes/classes/schedule.php');
require_once('./includes/classes/faqs.php');
require_once('./includes/classes/buyticket.php');
