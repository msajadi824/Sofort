<?php

namespace PouyaSoft_ir\Sofort\unittests;

use PouyaSoft_ir\Sofort\AbstractLoggerHandler;

class Unit_AbstractLoggerHandlerTest extends \PHPUnit_Framework_TestCase {
	
	public function testConstruct () {
		$AbstractLoggerHandler = $this->getMockForAbstractClass('AbstractLoggerHandler');
	}
}