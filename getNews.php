<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//get the classes we need

require("newsSource.php");

//create an array of all the websites we want to pull content from

$websites = array();

$websites["Scout Magazine"] = "http://scoutmagazine.ca";
$websites["Daily Hive Vancouver"] = "http://dailyhive.com/vancouver";
$websites["VancouverIsAwesome"] = "http://vancouverisawesome.com";
$websites["Inside Vancouver"] = "http://www.insidevancouver.ca";
$websites["Hello Vancity"] = "http://www.hellovancity.com";
$websites["The Snipe"] = "http://www.thesnipenews.com";
$websites["Vancouver Foodster"] = "http://vancouverfoodster.com";
$websites["Bored in Vancouver"] = "http://boredinvancouver.com/blog";
$websites["Westender"] = "http://www.westender.com";
$websites["Miss 604"] = "http://www.miss604.com";
$websites["604 Now"] = "http://604now.com";
$websites["Vancouverscape"] = "http://vancouverscape.com";
$websites["Georgia Straight"] = "http://www.straight.com";
$websites["Vancouver Observer"] = "http://www.vancouverobserver.com";
$websites["Modern Mix Vancouver"] = "http://modernmixvancouver.com";
$websites["Vancouver Slop"] = "http://www.vancouverslop.com";
$websites["Vancouver Bits and Bites"] = "https://maryinvancity.com";
$websites["Pangcouver"] = "http://www.pangcouver.com";
$websites["24hrs News Vancouver"] = "http://vancouver.24hrs.ca";
$websites["Metro News Vancouver"] = "http://www.metronews.ca/vancouver.html";


//create our first newsSource object
$scoutMagazine = new newsSource();

//I know I should be using getters and setters
// I'll make that change eventually
$scoutMagazine->publisher = "Scout Magazine";
$scoutMagazine->url = "http://scoutmagazine.ca";
$scoutMagazine->imgPath = "#scout-single-post-content img";
$scoutMagazine->headlinePath = "#scout-single-post > .row > div > h1";
$scoutMagazine->contentPath = "#scout-single-post-content p";
$scoutMagazine->contentPathIndex = 1;
$scoutMagazine->datePath = "#scout-single-date";


$test = $scoutMagazine->getArticleAt("#scout-front-carousel .carousel-inner .item a");


//echo $test;

?>