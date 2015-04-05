<?php

namespace PouyaSoft_ir\Sofort\UnitTests;

class SofortLibHttpCurlTest extends SofortLibTest {

	public function testPost () {
		$MockPost = $this->getMock(
			'PouyaSoft_ir\Sofort\Core\SofortLibHttpCurl',
			array('_curlRequest'),
			array('http://www.sofort.com', 'gzip', 'http://www.sofort.com')
		);
		
		$MockPost->setConfigKey(self::$configkey);
		$MockPost->expects($this->any())->method('_curlRequest')->will($this->returnValue(true));
		
		$this->assertEquals(true, $MockPost->post('data', 'url', array()));
		$this->assertEquals(true, $MockPost->post('data', false, false));
		
		$MockPost->error = 'Test';
		$this->assertEquals(
			'<errors><error><code>000Test</code><message></message></error></errors>',
			$MockPost->post('data', 'url', array())
		);
	}
}