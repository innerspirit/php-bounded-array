<?php

use innerspirit\BoundedArray;

class BoundedArrayTest extends PHPUnit_Framework_TestCase {

	public function testItemsAreCreated()
	{
		$res = new BoundedArray([1, 2, 3]);

		$this->assertEquals(count($res), 3);
	}
}