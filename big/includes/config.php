<?php

// the following helps avoid PHP date errors:
date_default_timezone_set('America/Los Angeles');

//Here are the keys for the server: floramaydesigns.com
$siteKey = "6Lc92RwUAAAAAF0B0QlomRhCasHwPWm2MtH-iyVO";
$secretKey = "6Lc92RwUAAAAAENSLPrnOhe7WhfzXdlp0IhxEWKv";



define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
    case 'index.php';
    $title = "Web Dev Examples by Flora May dela Cruz";  
    break;
    
    case 'calendar.php';
    $title = "Responsive Google Calendar";
    break;
        
    case 'flexbox.php';
    $title = "Flexbox Research";
    break;
        
    case 'galleries.php';
    $title = "Image Gallery Research";
    break;

    case 'map.php';
    $title = "Responsive Map";
    break;
        
    case 'youtube.php';
    $title = "Responsive Youtube SEO Video";
    break;
        
    case 'parallax.php';
    $title = "Parallax Research";
    break;
        
    case 'shoppingcarts.php';
    $title = "Shopping Carts Research";
    break;
        
    case 'siteapp.php';
    $title = "Responsive vs Native Mobile App Research";
    break;
        
    case 'webcam.php';
    $title = "Responsive Live Youtube and Traffic Web Cams";
    break;
        
    default;
    $title = THIS_PAGE;
        
}