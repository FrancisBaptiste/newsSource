<?php
//this is the main controller class for getting all our news.
//this is where we'll initialize all the newsSource objects and call the getArticleAt methods.
//the newSource class will actually gather all the data

//turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

//get the classes we need
require("newsSource.php");

//this array isn't actually going to be used. it's just here for reference.
$websites = array(
	"Scout Magazine" 			=> "http://scoutmagazine.ca",
	"Daily Hive Vancouver" 		=> "http://dailyhive.com/vancouver",
	"VancouverIsAwesome"		=> "http://vancouverisawesome.com",
	"Inside Vancouver"			=> "http://www.insidevancouver.ca",
	"The Growler"				=> "http://www.thegrowler.ca",
	"Hello Vancity"				=> "http://www.hellovancity.com",
	"The Snipe"					=> "http://www.thesnipenews.com",
	"Vancouver Foodster"		=> "http://vancouverfoodster.com",
	"Bored in Vancouver"		=> "http://boredinvancouver.com/blog",
	"Westender"					=> "http://www.westender.com",
	"Miss 604"					=> "http://604now.com",
	"604 Now"					=> "http://604now.com",
	"Vancouverscape"			=> "http://vancouverscape.com",
	"Business In Vancouver" 	=>	"https://www.biv.com",
	"Georgia Straight"			=> "http://www.straight.com",
	"Vancouver Observer"		=> "http://modernmixvancouver.com",
	"Vancouver Slop"			=> "http://www.vancouverslop.com",
	"Vancouver Bits and Bites" 	=> "https://maryinvancity.com",
	"Pangcouver"				=> "http://www.pangcouver.com",
	"24hrs News Vancouver"		=> "http://vancouver.24hrs.ca",
	"Metro News Vancouver"		=> "http://www.metronews.ca/vancouver.html"
);

//great a newsSource object
$scout = new newsSource(
	"Scout Magazine",
	"http://scoutmagazine.ca",
	"#scout-single-post-content img",
	0,
	"#scout-single-post > .row > div > h1",
	"#scout-single-post-content p",
	1,
	"#scout-single-date"
);

$scout->getArticleAt("#scout-front-carousel .carousel-inner .item a", 0);


?>