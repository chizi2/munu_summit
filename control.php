<?php
//
$title = "2020 International Impact Sourcing Summit";
$sub = "";
$content = "Welcome to the 2020 International Impact Sourcing Summit Web.";
if(!isset($_REQUEST['action'])){$_REQUEST['action']='home';}
//else{$_REQUEST['action'];}

switch ($_REQUEST['action']) {

    // Show front end home page/ Site's Home page
    case 'home':
        $content = dashboard::homepage();
        $dashboard->template($title, $sub, $content);
        break;

    case 'register':
        $title= "";
        $content = register::registerSponsor();
        $dashboard->template($title, $sub, $content);
        break;

    case 'about_summit':
        // $content = dashboard::homepage();
        $content=about::about_summit();
        $dashboard->template($title, $sub, $content);
        return $content;
        break;

}
