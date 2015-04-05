<?php

namespace PouyaSoft_ir\Sofort\UnitTests;

class AbstractLoggerHandlerTest extends \PHPUnit_Framework_TestCase {
	
	public function testConstruct () {
		$AbstractLoggerHandler = $this->getMockForAbstractClass('PouyaSoft_ir\Sofort\Core\AbstractLoggerHandler');
	}
}