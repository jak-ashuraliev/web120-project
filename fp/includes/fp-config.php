<?php
// config.php

// URL & labels for navigation:
$nav1['index.php'] = "Home";
$nav1['big/index.php'] = "Big Project";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact";


// echo ($_SERVER['PHP_SELF']);
define ('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// die;

// default title
$title = THIS_PAGE;

switch(THIS_PAGE){
    
    case 'index.php':
        $title = 'Jak Ashuraliev | Front-End Web Developer';
    break;
    
    case 'big/index.php':
        $title = 'Big Project Assignment';
    break;
    
    case 'aia.php':
        $title = 'Audience, Issues and Approach';
        $font_user = 'fa-users';
        $font2 = 'fa-check-square-o';
    break;
    
    case 'flowchart.php':
        $title = 'Flowchart';
    break;
    
    case 'fp/index.php':
        $title = 'Final Project';
    break;
    
    case 'contactme.php':
        $title = 'Contact Page';
    break;
}


//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

// -- PHP include CREDENTIALS file --
include ('includes/credentials.php');

/*
makeLinks function will create our dynamic nav when called.
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}






?>