<?php
//
$title = "2020 International Impact Sourcing Summit";
$sub = "";
$content = "Welcome to the 2020 International Impact Sourcing Summit Web.";

if(!isset($_REQUEST['action'])){$_REQUEST['action']='home';}
switch ($_REQUEST['action']) {

    // Show front end home page/ Site's Home page
    case 'home':
        $content = dashboard::homepage();
        $dashboard->template($title, $sub, $content);
        break;

    case 'guest':
        $title= "";
        $content = buyTicket::saveGuestDetails();
        $dashboard->template($title, $sub, $content);
        break;

    case 'sponsor':
        $title= "";
        $content = about::saveSponsorDetails();
        $dashboard->template($title, $sub, $content);
        break;

}
