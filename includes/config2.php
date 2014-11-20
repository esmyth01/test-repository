<?php
//config.php

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
//echo THIS_PAGE;
//die;

$nav1['fiji.php'] = "Fiji";
$nav1['template.php'] = "Home";
$nav1['hawaii.php'] = "Hawaii";
$nav1['jamaica.php'] = "Jamaica";


/*
echo '<pre>';
var_dump(makeLinks($nav1));
echo '</pre>';
die;
*/



switch(THIS_PAGE)
{
	
	case 'hawaii.php':	
		$title = "Island Title Tag";
		break;
		
	default:
		$title = "Default Title Tag";
		$banner = "Site Banner";		
	
}

function makeLinks($nav)
{
  	$myReturn = '';
	foreach($nav as $url => $label)
  	{
	  	
	  if($url == THIS_PAGE)
	  {//current page, add class
		 $myReturn .= '<li class="current"><a href="' . $url . '">' . $label . '</a></li>'; 
	  }else{//no class
		 $myReturn .= '<li><a href="' . $url . '">' . $label . '</a></li>';
	  }
	  	
	  	
	  	
	  	
	

  	}
  	
  	return $myReturn;	
	
}

/*
<li><a href="index.html">Home</a></li>
<li><a href="ourwork.html">Our Work</a></li>
<li><a href="testimonials.html">Testimonials</a></li>
<li><a href="projects.html">Projects</a></li>
<li class="current"><a href="contact.html">Contact Us</a></li>



*/

?>