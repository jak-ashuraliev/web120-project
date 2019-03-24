<?php
// config.php

// URL & labels for navigation:
$nav1['template.php'] = "Главная";
$nav1['how_it_works.php'] = "Как Это Работает";
$nav1['about.php'] = "О Нас";
$nav1['contact.php'] = "Контакт";


// echo ($_SERVER['PHP_SELF']);
define ('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// die;

// default title
$title = THIS_PAGE;
$meta_description = "Корпоративные WiFi-решения для объектов любого размера. Предоставьте гостям беспроблемный доступ к WiFi, а также собирайте ключевые демографические данные и данные о местоположении.";

switch(THIS_PAGE){
    
    case 'template.php':
        $title = 'PurpleWiFi Маркетинговые услуги в социальных сетях';
    break;
    
    case 'how_it_works.php':
        $title = 'Как Это Работает';
    break;
    
    case 'about.php':
        $title = 'О Нас';
    break;
    
    case 'contact.php':
        $title = 'Контакт';
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