<?php
// config.php

// URL & labels for navigation:
$nav1['../index.php'] = "Portal Page";
$nav1['index.php'] = "Home";
$nav1['lightbox.php'] = "Lightbox";
$nav1['respons-vs-mobile.php'] = "Responsive vs Mobile";
$nav1['galleries.php'] = "Galleries";
$nav1['flexbox.php'] = "Flexbox";
$nav1['shopping-carts.php'] = "Shopping Carts";
$nav1['calendar.php'] = "Calendar";
$nav1['youtube.php'] = "YouTube Video";
$nav1['google-map.php'] = "Google Map";
$nav1['contact.php'] = "Contact";


define ('THIS_PAGE', basename($_SERVER['PHP_SELF']));


// default title
$title = THIS_PAGE;

switch(THIS_PAGE){
    
    case 'index.php':
        $title = 'Home';
    break;
    
    case 'lightbox.php':
        $title = 'Lightbox';
    break;
    
    case 'respons-vs-mobile.php':
        $title = 'Responsive vs Mobile';
    break;
    
    case 'galleries.php':
        $title = 'Galleries';
    break;
    
    case 'flexbox.php':
        $title = 'Flexbox';
    break;
    
    case 'shopping-carts.php':
        $title = 'Shopping Carts';
    break;
    
    case 'calendar.php':
        $title = 'Calendar';
    break;
    
    case 'youtube.php':
        $title = 'youtube.php';
    break;
    
    case 'google-map.php':
        $title = 'Google Map';
    break;
    
    case 'contact.php':
        $title = 'Contact';
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