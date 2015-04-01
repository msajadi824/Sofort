<?php

namespace PouyaSoft_ir\Sofort\unittests;


require_once(dirname(__FILE__).'/../core/abstractLoggerHandler.php');

class Unit_AbstractLoggerHandlerTest extends PHPUnit_Framework_TestCase {
	
	public function testConstruct () {
		$AbstractLoggerHandler = $this->getMockForAbstractClass('AbstractLoggerHandler');
	}
}