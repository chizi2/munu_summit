<?php

function redirect_to($location = NULL){
    if ($location != NULL) {

        echo'<html xmlns="http://www.w3.org/1999/xhtml">    
  <head>      
    <title>Processing...</title>      
    <meta http-equiv="refresh" content="0;URL=\''.$location.'\'" />    
  </head>    
  <body> 
    <p>&nbsp;</p> 
  </body> 
</html> ';
        //  header("Location: {$location}");
        exit();
    }
}
