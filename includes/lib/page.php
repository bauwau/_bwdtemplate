<?php
	class Page {
	    function __construct($title, $description, $bodyClass, $contentLocation) {
       		$this->title = $title;
       		$this->description = $description;
       		$this->bodyClass = $bodyClass;
       		$this->contentLocation = $contentLocation;
       		$this->uri = $_SERVER['REQUEST_URI'];
   		}
	};
?>