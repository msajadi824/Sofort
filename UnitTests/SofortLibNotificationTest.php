<?php

namespace PouyaSoft_ir\Sofort\UnitTests;

use PouyaSoft_ir\Sofort\Core\SofortLibNotification;

class SofortLibNotificationTest extends SofortLibTest {
	
	protected $_classToTest = 'PouyaSoft_ir\Sofort\Core\SofortLibNotification';
	
	public function testGetNotification() {
		$SofortLibNotification = new SofortLibNotification();
		
		$statusNotification = '';
		$this->assertFalse($SofortLibNotification->getNotification($statusNotification));
		
		$statusNotification = '<?xml version="1.0" encoding="UTF-8"?>
<status_notification>
<transaction>1324-1234-5483-4891</transaction>
<time>2010-04-14T19:01:08+02:00</time>
</status_notification>';
		$notification = '1324-1234-5483-4891';
		$this->assertEquals($notification, $SofortLibNotification->getNotification($statusNotification));
		
		$statusNotification = '<?xml version="1.0" encoding="UTF-8"?>
<status_test>
<transaction>1324-1234-5483-4891</transaction>
<time>2010-04-14T19:01:08+02:00</time>
</status_test>';
		$this->assertFalse($SofortLibNotification->getNotification($statusNotification));
		
		$statusNotification = '<?xml version="1.0" encoding="UTF-8"?>
<status_notification>
<nontransaction>1324-1234-5483-4891</nontransaction>
<time>2010-04-14T19:01:08+02:00</time>
</status_notification>';
		$this->assertFalse($SofortLibNotification->getNotification($statusNotification));
	}
	
	
	public function testGetTime() {
		$time = self::_getProperty('_time', $this->_classToTest);
		$SofortLibNotification = new SofortLibNotification(self::$configkey);
		$testTime = '2010-04-14T19:01:08+02:00';
		$time->setValue($SofortLibNotification, $testTime);
		$this->assertEquals($testTime, $SofortLibNotification->getTime());
	}
	
	
	public function testGetTransactionId() {
		$transactionId = self::_getProperty('_transactionId', $this->_classToTest);
		$SofortLibNotification = new SofortLibNotification(self::$configkey);
		$testTransactionId = '1324-1234-5483-4891';
		$transactionId->setValue($SofortLibNotification, $testTransactionId);
		$this->assertEquals($testTransactionId, $SofortLibNotification->getTransactionId());
	}
}