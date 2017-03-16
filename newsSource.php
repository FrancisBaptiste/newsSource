<?php

require("simple_html_dom.php");
require("simpleImage.php");


class newsSource {

	//setting all the properties
	//the index paths are optional, to determine if you should grab an instance other than the first
	public $publisher;
	public $url;
	public $imgPath;
	public $imgPathIndex = 0;
	public $headlinePath;
	public $contentPath;
	public $contentPathIndex = 0;
	public $datePath;

	//This is the main method for getting the article content
	public function getArticleAt($elementPath){

		//we use the url property to get the homepage html
		$html = file_get_html($this->url);

		//if there is something int he array at this element path, then grab the first item
		if( count($html->find($elementPath)) > 0){
			$articleLinkEnd = $html->find($elementPath)[0]->href;
		}else{
			//if we find nothing, return false and end this method
			return false;
		}

		//build the article link from the url property and the newly found $articleLinkEnd
		$articleLink = $this->url . $articleLinkEnd;

		//now we have to get the html of the article link
		$html = file_get_html($articleLink);
		//if there's a count on this array, get the src of the element
		if( $html->find($this->imgPath, $this->imgPathIndex) ){
			$img = $html->find($this->imgPath, $this->imgPathIndex)->src;
		}else{
			return false;
		}

		//get the headline at the path specified
		if( count($html->find($this->headlinePath)) > 0){
			$headline = $html->find($this->headlinePath)[0]->plaintext;
		}else{
			return false;
		}

		//get the content at the path specified. The index is 0, because there's only ever one.
		if( $html->find($this->headlinePath, 0) ){
			$headline = $html->find($this->headlinePath, 0)->plaintext;
		}else{
			return false;
		}

		//get the content at the specified index path. if no path was set it will be 0 by default
		if( $html->find($this->contentPath, $this->contentPathIndex) ){
			$content = $html->find($this->contentPath, $this->contentPathIndex)->plaintext;
		}else{
			return false;
		}

		//get the date
		if( $html->find($this->datePath, 0) ){
			$date = $html->find($this->datePath, 0)->plaintext;
		}else{
			return false;
		}

		echo "$img <br/> $headline <br/> $content <br/> $date";


	}

}


?>