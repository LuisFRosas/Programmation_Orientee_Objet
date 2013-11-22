<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>POO Plan Cartésien à deux dimensions	- LuisRosas</title>
	<style>
		#container{
			margin:0 auto;
			width:500px;
		}
	</style>
</head>
<body>
	<div id="container">
	<?php
		require("./includes/classes/PointCartesien.class.php");
		$title = "POO Point Cartésien à deux dimensions - LuisRosas";
		$content = "";
		
		$point1 = new PointCartesien(5,5);
		
		$point1->position(5,5);
		$point1->translation(80,80);
		$content.= "Point 1 : ".$point1->toString()."<br>";
		$point1->rotation(90);
		$content.= "Point 1 rotation 90° : ".$point1->toString()."<br>";
		$content.= "<hr>";
		
		$point2 = $point1->copie();
		$content.= "Point 2 : ".$point2->toString()."<br>";
		$point2->rotation(180);
		$content.= "Point 2 rotation 180°: ".$point2->toString()."<br>";
		$content.= "<hr>";
		
		$content.= "Égalité des points : ".($point1->egaleA($point2))? "TRUE" : "FALSE ";
		$content.= "<hr>";
		
		$point2->rotation(-180);
		$content.= "Point 2 rotation -180°: ".$point2->toString()."<br>";
		$content.= "Égalité des points : ".($point1->egaleA($point2))? "TRUE" : "FALSE ";
		$content.= "<hr>";
		
		$content.= "Position point 1 : ".$point1->toString()."<br>";
		$content.= "Position point 2 : ".$point2->toString()."<br>";
		
		$point2->rotation(90);
		$content.= "Point 2 rotation 90°: ".$point2->toString()."<br>";
		$content.= "Distance entre point 1 et point 2 : ".$point1->distance($point2)."<br>";
		$content.= "<hr>";
		
		include("./includes/htmlWrapper.inc.php");		
		
	?>
</body>
</html>