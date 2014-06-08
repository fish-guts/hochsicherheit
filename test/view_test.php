<?php

define('ROOT_PATH',"../");
require_once("../view/about.php");

class ViewTest extends PHPUnit_Framework_TestCase {

	public function setup() {
	
	}
	public function teardown() {}
	

	public function testTitle() {
		$page = new About();
		$this->assertNotNull($page->getPageTitle());	
	}

	public function testContent() {
		$page = new About();
		$this->assertNotNull($page->getPageContent());	

	}
}
