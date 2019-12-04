<?php

// the following helps avoid PHP date errors:
date_default_timezone_set('America/Los Angeles');

//Here are the keys for the server: floramaydesigns.com
$siteKey = "6Lc92RwUAAAAAF0B0QlomRhCasHwPWm2MtH-iyVO";
$secretKey = "6Lc92RwUAAAAAENSLPrnOhe7WhfzXdlp0IhxEWKv";

//place URL & labels in the variable/array here for navigation:
$nav1['index.php'] = "Home";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['ux.php'] = "Google Doc (UX)";
$nav1['exercises.php'] = "Exercises";
$nav1['fp.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Me";

//makeLinks() below:

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//current page - add class reference
	    	$myReturn .= '<li><a class="current" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
    case 'index.php';
    $title = "Flora May's WEB 120 Portal";  
    $logo = "fa-home";
    break;
        
    case 'aia.php';
    $title = "Flora May's Audience Issues and Approach work";
    $logo = "fa-chain-broken";
    break;
    
    case 'exercises.php';
    $title = "Exercise Page";
    $logo = "fa-universal-access";
    break;
        
    case 'contactme.php';
    $title = "Contact Flora";
    $logo = "fa-paper-plane-o";
    break;
        
    default;
    $title = THIS_PAGE;
    $logo = "";
        
}